<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ventes\VentesBundle\Entity\Encaissement;
use Ventes\VentesBundle\Form\EncaissementType;
use Ventes\VentesBundle\Modules\ChiffreLettre;

/**
 * Encaissement controller.
 *
 */
class EncaissementController extends Controller {

    /**
     * Lists all Encaissement entities.
     *
     */
    public function indexAction($idfacture) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('VentesBundle:Facture')->find($idfacture);
        $client = $em->getRepository('VentesBundle:Client')->find($facture->getClient()->getId());
        if (!$facture || !$client) {
            throw $this->createNotFoundException('Facture introuvable.');
        }
        $entities = $em->getRepository('VentesBundle:Encaissement')->findBy(array('facture' => $facture));
        return $this->render('VentesBundle:Encaissement:index.html.twig', array(
                    'entities' => $entities,
                    'facture' => $facture,
                    'client' => $client
        ));
    }

    /**
     * le service d'impression encaissement
     * 
     */
    public function impressionEncaissementAction($idfact) {

        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('VentesBundle:Facture')->find($idfact);
        if (!$facture) {
            throw $this->createNotFoundException('Facture introuvable.');
        }
        $client = $em->getRepository('VentesBundle:Client')->find($facture->getClient()->getId());
        if (!$client) {
            throw $this->createNotFoundException('client introuvable.');
        }
        $montant = 0;
        foreach ($facture->getEncaissement() as $encaissement) {
            $montant += $encaissement->getMontant();
        }
        $chiffreLettre = new ChiffreLettre();
        $chiffre_en_lettre = $chiffreLettre->convert_number_to_words($montant);

        $html = $this->renderView('VentesBundle::sections_ventes/encaissFact_pdf.html.twig', array('montant'=>$montant, 'facture'=>$facture, 'client'=>$client, 'chiffre_en_lettre' => $chiffre_en_lettre));
        $filename = 'encaiss.pdf';
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }
    /**
     * le service d'impression Encaissement single
     * 
     */
    public function printSingleEncaissementAction($idencaiss) {

        $em = $this->getDoctrine()->getManager();
        $encaissement = $em->getRepository('VentesBundle:Encaissement')->find($idencaiss);
        if (!$encaissement) {
            throw $this->createNotFoundException('Encaissement introuvable.');
        }
         $facture = $em->getRepository('VentesBundle:Facture')->find($encaissement->getFacture()->getId());
        if (!$facture) {
            throw $this->createNotFoundException('Facture introuvable.');
        }
        $client = $em->getRepository('VentesBundle:Client')->find($facture->getClient()->getId());
        if (!$client) {
            throw $this->createNotFoundException('client introuvable.');
        }
        $montant = $encaissement->getMontant();
        $chiffreLettre = new ChiffreLettre();
        $chiffre_en_lettre = $chiffreLettre->convert_number_to_words($montant);

        $html = $this->renderView('VentesBundle::sections_ventes/encaissemntSingle_pdf.html.twig', array('entity'=>$encaissement, 'facture'=>$facture, 'client'=>$client, 'chiffre_en_lettre' => $chiffre_en_lettre));
        $filename = 'encaiss_simple.pdf';
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * Lists all Encaissement entities.
     *
     */
    public function allEncaissementAction() {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('VentesBundle:Encaissement')->findAll();

        return $this->render('VentesBundle:Encaissement:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Encaissement entity.
     *
     */
    public function createAction(Request $request, $idfacture) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('VentesBundle:Facture')->find($idfacture);
        if (!$facture) {
            throw $this->createNotFoundException('Aucune facture trouvée');
        }
        $entity = new Encaissement();
        $form = $this->createCreateForm($entity, $facture);
        $form->handleRequest($request);
        $totalEncaisses = 0;
        foreach ($facture->getEncaissement() as $encaissement) {
            $totalEncaisses = $totalEncaisses + $encaissement->getMontant();
        }
        if ($entity->getMontant() < 0 || $entity->getMontant() > $facture->getTotalFacture()) {
            throw $this->createNotFoundException('Donnée non valide');
        }

        if ($facture->getTypeFacture() == 'Service' && $entity->getMontant() > ($facture->getTotalFacture() - $totalEncaisses)) {
            throw $this->createNotFoundException('Montant trop élévé');
        }


        if ($form->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            if (($entity->getMontant() + $totalEncaisses) == $facture->getTotalFacture() && $facture->getTypeFacture() == 'Service') {
                $facture->setEtat('Terminé');
            }

            $entity->setDate(new \DateTime());
            $facture->addEncaissement($entity);
            $entity->setFacture($facture);


            /**             * ****** */
            $today = new \DateTime();
            $year = date_format($today, 'Y');
            $month = date_format($today, 'm');
            $day = date_format($today, 'Y-m-d');
            $entity->setAnnee($year);
            $entity->setMois($month);
            $entity->setDateFormat(new \DateTime($day));

            $em->merge($facture);
            $em->persist($entity);

            $em->flush();

            return $this->redirect($this->generateUrl('encaissement_show', array('id' => $entity->getId())));
        }

        return $this->render('VentesBundle:Encaissement:new.html.twig', array(
                    'entity' => $entity,
                    'facture' => $facture,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Encaissement entity.
     *
     * @param Encaissement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Encaissement $entity, $facture) {
        $form = $this->createForm(new EncaissementType(), $entity, array(
            'action' => $this->generateUrl('encaissement_create', array('idfacture' => $facture->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Encaissement entity.
     *
     */
    public function newAction($idfacture) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('VentesBundle:Facture')->find($idfacture);
        if (!$facture) {
            throw $this->createNotFoundException('Aucune facture trouvée');
        }
        $entity = new Encaissement();
        $form = $this->createCreateForm($entity, $facture);

        return $this->render('VentesBundle:Encaissement:new.html.twig', array(
                    'entity' => $entity,
                    'facture' => $facture,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Encaissement entity.
     *
     */
    public function showAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Encaissement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encaissement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Encaissement:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Encaissement entity.
     *
     */
    public function editAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Encaissement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encaissement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Encaissement:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Encaissement entity.
     *
     * @param Encaissement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Encaissement $entity) {
        $form = $this->createForm(new EncaissementType(), $entity, array(
            'action' => $this->generateUrl('encaissement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Encaissement entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Encaissement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encaissement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            $em->flush();

            return $this->redirect($this->generateUrl('encaissement_edit', array('id' => $id)));
        }

        return $this->render('VentesBundle:Encaissement:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Encaissement entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:Encaissement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Encaissement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('encaissement'));
    }

    /**
     * Creates a form to delete a Encaissement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('encaissement_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer'))
                        ->getForm()
        ;
    }

     /**
     * 
     * controle des droits et aitorisations
     */
    private function securityControle() {
        if (
                !$this->getUser()->hasRole('ROLE_ADMIN') &&
                !$this->getUser()->hasRole('ROLE_COMPTABLE') 
        ) {
            // throw $this->createAccessDeniedException('Accès interdit');
            return $this->redirect($this->generateUrl('ventes_accueil'));
        }
    }

}
