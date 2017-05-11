<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ventes\VentesBundle\Entity\Client;
use Ventes\VentesBundle\Form\ClientType;

/**
 * Client controller.
 *
 */
class ClientController extends Controller {

    /**
     * Lists all Client entities.
     *
     */
    public function indexAction() {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('VentesBundle:CategorieProduit')->findAll();
        $entities = $em->getRepository('VentesBundle:Client')->findAll();
        
        //gestion new client
        $entity = new Client();
        $form = $this->createCreateForm($entity);

        return $this->render('VentesBundle:Client:index.html.twig', array(
                    'categories' => $categories,
                    'entities' => $entities,
                    'form' => $form->createView(),
        ));
    }
    /**
     * Gestion proforma .
     *
     */
    public function proformaAction() {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('VentesBundle:CategorieProduit')->findAll();
        $entities = $em->getRepository('VentesBundle:Client')->findAll();
        
        //gestion new client
        $entity = new Client();
        $form = $this->createCreateForm($entity);

        return $this->render('VentesBundle:Client:proforma.html.twig', array(
                    'categories' => $categories,
                    'entities' => $entities,
                    'form' => $form->createView(),
        ));
    }


    /**
     * Creates a new Client entity.
     *
     */
    public function createAction(Request $request) {
        $this->securityControle();
        $entity = new Client();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $entity->setNumero('CL');
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            $em->persist($entity);
            $em->flush();
            $numero = $entity->getId();
            $type = substr($entity->getCategorie(), 0, 1);
            $entity->setNumero('CL' . $numero . $type);
            $em->flush();
            return $this->redirect($this->generateUrl('client'));
        }

        return $this->render('VentesBundle:Client:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Client entity.
     *
     * @param Client $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Client $entity) {
        $form = $this->createForm(new ClientType(), $entity, array(
            'action' => $this->generateUrl('client_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Client entity.
     *
     */
    public function newAction() {
        $this->securityControle();
        $entity = new Client();
        $form = $this->createCreateForm($entity);

        return $this->render('VentesBundle:Client:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Client entity.
     *
     */
    public function showAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }
        $factures = $em->getRepository('VentesBundle:Facture')->findBy(array('client' => $entity));


        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Client:show.html.twig', array(
                    'entity' => $entity,
                    'factures' => $factures,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Client entity.
     *
     */
    public function editAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Client:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Client entity.
     *
     * @param Client $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Client $entity) {
        $form = $this->createForm(new ClientType(), $entity, array(
            'action' => $this->generateUrl('client_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Client entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            $em->flush();

            return $this->redirect($this->generateUrl('client_show', array('id' => $id)));
        }

        return $this->render('VentesBundle:Client:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Client entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:Client')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Client entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('client'));
    }

    /**
     * Creates a form to delete a Client entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('client_delete', array('id' => $id)))
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
