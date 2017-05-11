<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\GestionBundle\Entity\Salaire;
use Gestion\GestionBundle\Form\SalaireType;

/**
 * Salaire controller.
 *
 */
class SalaireController extends Controller
{

    /**
     * Lists all Salaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionBundle:Salaire')->findAll();

        return $this->render('GestionBundle:Salaire:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Salaire entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Salaire();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('salaire_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionBundle:Salaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Salaire entity.
     *
     * @param Salaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Salaire $entity)
    {
        $form = $this->createForm(new SalaireType(), $entity, array(
            'action' => $this->generateUrl('salaire_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Salaire entity.
     *
     */
    public function newAction()
    {
        $entity = new Salaire();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionBundle:Salaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Salaire entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Salaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Salaire:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Salaire entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Salaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salaire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Salaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
	
	

    /**
    * Creates a form to edit a Salaire entity.
    *
    * @param Salaire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Salaire $entity)
    {
        $form = $this->createForm(new SalaireType(), $entity, array(
            'action' => $this->generateUrl('salaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Salaire entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Salaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('salaire_edit', array('id' => $id)));
        }

        return $this->render('GestionBundle:Salaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Salaire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Salaire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Salaire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('salaire'));
    }

    /**
     * Creates a form to delete a Salaire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('salaire_delete', array('id' => $id)))
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
                !$this->getUser()->hasRole('ROLE_ADMIN')
        ) {
            // throw $this->createAccessDeniedException('Accès interdit');
            return $this->redirect($this->generateUrl('ventes_accueil'));
        }
    }
}
