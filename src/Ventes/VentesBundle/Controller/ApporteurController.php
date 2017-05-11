<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ventes\VentesBundle\Entity\Apporteur;
use Ventes\VentesBundle\Form\ApporteurType;

/**
 * Apporteur controller.
 *
 */
class ApporteurController extends Controller {

    /**
     * Lists all Apporteur entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentesBundle:Apporteur')->findAll();

        return $this->render('VentesBundle:Apporteur:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * ca apporteur
     */
    public function caApporteurAction(Request $request, $idap) {
        $em = $this->getDoctrine()->getManager();
        $dated = new \DateTime($request->request->get('datedebut'));
        $datef = new \DateTime($request->request->get('datefin'));
        $datedebut = date_format($dated, 'Y-m-d');
        $datefin = date_format($datef, 'Y-m-d');

        $apporteur = $em->getRepository('VentesBundle:Apporteur')->find(intval($idap));
        if (!$apporteur) {
            throw $this->createNotFoundException('Apporteur introuvable');
        }
        $caApporteur = 0;
        $clients = $em->getRepository('VentesBundle:Client')->findByApporteur($apporteur);
        foreach ($clients as $client) {
            $factures = $em->getRepository('VentesBundle:Facture')->findByClient($client);
            foreach ($factures as $facture) {
                $encaissements = $em->getRepository('VentesBundle:Encaissement')->ParCAApporteur($facture->getId(), $datedebut, $datefin);
                if (count($encaissements) > 0) {
                    foreach ($encaissements as $encaissement) {
                      $caApporteur = $caApporteur +  $encaissement->getMontant();
                    }
                }
            }
        }

        $html = $this->renderView('VentesBundle::sections_ventes/caapporteur_pdf.html.twig', array('entity' => $apporteur, 'caApporteur' => $caApporteur, 'datedebut' => $datedebut, 'datefin' => $datefin));
        $filename = 'caApporteur.pdf';
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "attachment;filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * Creates a new Apporteur entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Apporteur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('apporteur_show', array('id' => $entity->getId())));
        }

        return $this->render('VentesBundle:Apporteur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Apporteur entity.
     *
     * @param Apporteur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Apporteur $entity) {
        $form = $this->createForm(new ApporteurType(), $entity, array(
            'action' => $this->generateUrl('apporteur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Apporteur entity.
     *
     */
    public function newAction() {
        $entity = new Apporteur();
        $form = $this->createCreateForm($entity);

        return $this->render('VentesBundle:Apporteur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Apporteur entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Apporteur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Apporteur entity.');
        }
        $clients = $em->getRepository('VentesBundle:Client')->findByApporteur($entity);

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Apporteur:show.html.twig', array(
                    'entity' => $entity,
                    'clients' => $clients,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Apporteur entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Apporteur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Apporteur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Apporteur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Apporteur entity.
     *
     * @param Apporteur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Apporteur $entity) {
        $form = $this->createForm(new ApporteurType(), $entity, array(
            'action' => $this->generateUrl('apporteur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Apporteur entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Apporteur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Apporteur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('apporteur'));
        }

        return $this->render('VentesBundle:Apporteur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Apporteur entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:Apporteur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Apporteur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('apporteur'));
    }

    /**
     * Creates a form to delete a Apporteur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('apporteur_delete', array('id' => $id)))
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
