<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ventes\VentesBundle\Entity\Facture;
use Ventes\VentesBundle\Form\FactureType;
use Ventes\VentesBundle\Modules\ChiffreLettre;

/**
 * Facture controller.
 *
 */
class FactureController extends Controller {

    /**
     * Lists all Facture entities by client.
     *
     */
    public function indexAction($idcli, $etat) {
        if ($etat != 'facture' && $etat != 'proforma') {
            throw $this->createNotFoundException('Etat introuvable');
        }
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('VentesBundle:Client')->find($idcli);
        if (!$client) {
            throw $this->createNotFoundException('Client introuvable.');
        }
        $type = 'Facture';
        if ($etat == 'facture') {
            $entities = $em->getRepository('VentesBundle:Facture')->findBy(array('client' => $client, 'etat' => 'En cours'));
        } else {
            $entities = $em->getRepository('VentesBundle:Facture')->findBy(array('client' => $client, 'etat' => 'Proforma'));
            $type = 'Proforma';
        }

        return $this->render('VentesBundle:Facture:index.html.twig', array(
                    'entities' => $entities,
                    'client' => $client,
                    'type' => $type
        ));
    }

    /**
     * Lists all Facture entities   .
     *
     */
    public function allProformaAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentesBundle:Facture')->findBy(array('etat' => 'Proforma'));
        return $this->render('VentesBundle:Facture:index.html.twig', array(
                    'entities' => $entities,
                    'type' => 'Proforma'
        ));
    }

    /**
     * Lists all Facture entities   .
     *
     */
    public function allFactureAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('VentesBundle:Facture')->findByTousFacture();
        return $this->render('VentesBundle:Facture:index.html.twig', array(
                    'entities' => $entities,
                    'type' => 'Facture'
        ));
    }

    /**
     * Validation facture proforma    .
     *
     */
    public function validerAction($idproforma) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Facture')->find($idproforma);
        if (!$entity) {
            throw $this->createNotFoundException('Proforma introuvable.');
        }
        $entity->setEtat('En cours');
        $entity->setTypeFacture('Service');
        $entity->setUtilisateur($this->getUser());
        $entity->setLastUpdate(new \DateTime());
        $em->merge($entity);
        $em->flush();

        return $this->render('VentesBundle:Facture:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    /**
     * Validation facture proforma    .
     *
     */
    public function retirerAction($idfacture) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('VentesBundle:Facture')->find($idfacture);
        if (!$entity) {
            throw $this->createNotFoundException('Facture introuvable.');
        }
        $entity->setUtilisateur($this->getUser());
        $entity->setLastUpdate(new \DateTime());
        $entity->setEtat('Retiré');
        $em->merge($entity);
        $em->flush();

        return $this->render('VentesBundle:Facture:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    /**
     * le service d'impression facture
     * 
     */
    public function impressionFactureAction($idfacture) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('VentesBundle:Facture')->find($idfacture);
        if (!$entity) {
            throw $this->createNotFoundException('Aucune facture trouvée');
        }
        $chiffreLettre = new ChiffreLettre();
        $montant = $entity->getTotalFacture();
        $chiffre_en_lettre = $chiffreLettre->convert_number_to_words($montant);

        $html = $this->renderView('VentesBundle::sections_ventes/facture_pdf.html.twig', array('entity' => $entity, 'chiffre_en_lettre' => $chiffre_en_lettre));
        $numeroFacture = $entity->getNumero();
        $filename = $numeroFacture . '.pdf';
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * Creates a new etat entity.
     *
     */
    public function compteEtatAction(Request $request, $idcli) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $dated = new \DateTime($request->request->get('datedebut'));
        $datef = new \DateTime($request->request->get('datefin'));
        $datedebut = date_format($dated, 'Y-m-d');
        $datefin = date_format($datef, 'Y-m-d');

        $client = $em->getRepository('VentesBundle:Client')->find(intval($idcli));
        if (!$client) {
            throw $this->createNotFoundException('Client introuvable');
        }
        $entities = $em->getRepository('VentesBundle:Facture')->ParCompte($idcli, $datedebut, $datefin);

        $html = $this->renderView('VentesBundle::sections_ventes/compte_pdf.html.twig', array('client' => $client, 'datedebut' => $datedebut, 'datefin' => $datefin, 'entities' => $entities));
        $filename = 'compte.pdf';
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "attachment;filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * Creates a new Facture entity.
     *
     */
    public function createAction(Request $request, $idclient, $etat) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $entity = new Facture();
        //  $status = $request->query->get('status');
        // $idclient = intval($request->query->get('idclient'));
        $client = $em->getRepository('VentesBundle:Client')->find(intval($idclient));
        if (!$client) {
            throw $this->createNotFoundException('Client introuvable');
        }
        if ($etat != 'facture' && $etat != 'proforma') {
            throw $this->createNotFoundException('Etat introuvable');
        }

        $form = $this->createCreateForm($entity, $client, $etat);
        $form->handleRequest($request);
        $entity->setNumero('Indéfinie');
        $entity->setEtat('En cours');
        if ($etat == 'proforma') {
            $entity->setEtat('Proforma');
        }
        $entity->setDateFacture(new \DateTime());
        $entity->setClient($client);
        $entity->setTotalFacture(0);

        if ($form->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            $entity->setTypeFacture('Service');
            if ($etat == 'proforma') {
                $entity->setTypeFacture('Proforma');
            }
            $entity = $this->traitementFacture($entity);
            $em->persist($entity);
            $em->flush();
            $this->gestionReference($entity);
            return $this->redirect($this->generateUrl('facture_show', array('id' => $entity->getId())));
        }

        return $this->render('VentesBundle:Facture:new.html.twig', array(
                    'entity' => $entity,
                    'client' => $client,
                    'form' => $form->createView(),
        ));
    }

    /**
     * gestion des references des factures location et achat
     */
    private function gestionReference($entity) {
        $em = $this->getDoctrine()->getManager();
        $date = new \DateTime();
        $annee = date_format($date, 'Y');

        $numero = $entity->getId();
        $type = substr($entity->getTypeFacture(), 0, 1);
        $entity->setNumero('F' . $numero . $type . $annee);
        $em->merge($entity);
        $em->flush();
        return null;
    }

    /**
     * Traitement total de la facturation
     */
    private function traitementFacture($entity) {
        $montant = 0;
        $date = new \DateTime();
        $em = $this->getDoctrine()->getManager();

        foreach ($entity->getDetailsProduits() as $produit) {
            $today = date_format($date, 'Y-m-d');
            if ($produit->getPrixHT() <= 0 || $produit->getQuantite() < 1) {
                throw $this->createNotFoundException('Donnée non valide');
            }
            $produit->setDate(new \DateTime($today));
            $produitsBosoft = $em->getRepository('VentesBundle:Produit')->findOneBy(array('refProd' => $produit->getRefProd()));
            if ($produitsBosoft) {
                $produit->setIdProduit($produitsBosoft->getId());
                $produit->setIdCategoriePoduit($produitsBosoft->getCategorieProduit()->getId());
            } else {
                throw $this->createNotFoundException('Référence introuvable');
            }
            $produit->setFacture($entity);
            $totalVendu = $produitsBosoft->getTotalVendu() + $produit->getQuantite();

            $produitsBosoft->setTotalVendu($totalVendu);

            if ($entity->getTypeFacture() == 'Service') {
                $totalVendu = $produitsBosoft->getTotalVendu() + $produit->getQuantite();
                $produitsBosoft->setTotalVendu($totalVendu);
            }
            $em->merge($produitsBosoft);
            $em->persist($produit);
            $montant = $montant + ($produit->getPrixHT() * $produit->getQuantite());
        }
        if ($entity->getRemise() < 0 || $entity->getReduction() < 0) {
            throw $this->createNotFoundException('Rémise ou reduction invalide');
        }
        $remise = $montant * ($entity->getRemise() / 100);
        $montantApresRemise = $montant - $remise;
        $montantApresReduction = $montantApresRemise - $entity->getReduction();
        $tva = $montantApresReduction * ($entity->getTvafacture() / 100);
        $montantTTC = $montantApresReduction + $tva;
        $entity->setTotalFacture($montantTTC);
        return $entity;
    }

    /**
     * Creates a form to create a Facture entity.
     *
     * @param Facture $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Facture $entity, $client, $etat) {
        $form = $this->createForm(new FactureType($client), $entity, array(
            'action' => $this->generateUrl('facture_create', array('idclient' => $client->getId(), 'etat' => $etat)),
            'method' => 'POST',
        ));


        $form->add('submit', 'submit', array('label' => 'Soumettre', 'attr' => array('class' => 'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Facture entity.
     *
     */
    public function newAction($idclient, $etat) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('VentesBundle:Client')->find($idclient);

        if (!$client) {
            throw $this->createNotFoundException('Client introuvable');
        }

        if ($etat != 'facture' && $etat != 'proforma') {
            throw $this->createNotFoundException('Etat introuvable');
        }

        $entity = new Facture();
        $form = $this->createCreateForm($entity, $client, $etat);

        return $this->render('VentesBundle:Facture:new.html.twig', array(
                    'entity' => $entity,
                    'client' => $client,
                    'etat' => $etat,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Facture entity.
     *
     */
    public function showAction($id) {

        $this->securityControle();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Facture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facture entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Facture:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Facture entity.
     *
     */
    public function editAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Facture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facture entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Facture:edit.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Facture entity.
     *
     * @param Facture $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Facture $entity) {
        $form = $this->createForm(new FactureType(), $entity, array(
            'action' => $this->generateUrl('facture_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Facture entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Facture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Facture entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            $em->flush();

            return $this->redirect($this->generateUrl('facture_edit', array('id' => $id)));
        }

        return $this->render('VentesBundle:Facture:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Facture entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:Facture')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Facture entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('facture'));
    }

    /**
     * Creates a form to delete a Facture entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('facture_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
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
                !$this->getUser()->hasRole('ROLE_COMMERCIAL')
        ) {
            // throw $this->createAccessDeniedException('Accès interdit');
            return $this->redirect($this->generateUrl('ventes_accueil'));
        }
    }

}
