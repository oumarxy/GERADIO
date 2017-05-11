<?php

namespace Members\MembersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Members\MembersBundle\Entity\AccountMember;
use Members\MembersBundle\Form\AccountMemberType;

/**
 * AccountMember controller.
 *
 */
class AccountMemberController extends Controller {

    /**
     * Lists all AccountMember entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MembersBundle:AccountMember')->findAll();

        return $this->render('MembersBundle:AccountMember:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new AccountMember entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new AccountMember();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('account_show', array('id' => $entity->getId())));
        }

        return $this->render('MembersBundle:AccountMember:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AccountMember entity.
     *
     * @param AccountMember $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AccountMember $entity) {
        $form = $this->createForm(new AccountMemberType(), $entity, array(
            'action' => $this->generateUrl('account_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AccountMember entity.
     *
     */
    public function newAction() {
        $entity = new AccountMember();
        $form = $this->createCreateForm($entity);

        return $this->render('MembersBundle:AccountMember:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AccountMember entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MembersBundle:AccountMember')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccountMember entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MembersBundle:AccountMember:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AccountMember entity.
     *
     */
    public function editAction($id, $status) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MembersBundle:AccountMember')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccountMember entity.');
        }
        if ($status != 'infoperso' && $status != 'pwd') {
            throw $this->createNotFoundException('preciser la status de la demande.');
        }

        $editForm = $this->createEditForm($entity, $status);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MembersBundle:AccountMember:edit.html.twig', array(
                    'entity' => $entity,
                    'status' => $status,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a AccountMember entity.
     *
     * @param AccountMember $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(AccountMember $entity, $status) {
        $form = $this->createForm(new AccountMemberType(), $entity, array(
            'action' => $this->generateUrl('account_update', array('id' => $entity->getId(), 'status' => $status)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing AccountMember entity.
     *
     */
    public function updateAction(Request $request, $id, $status) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MembersBundle:AccountMember')->find($id);
        if ($status != 'infoperso' && $status != 'pwd') {
            throw $this->createNotFoundException('preciser la status de la demande.');
        }
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccountMember entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity, $status);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $this->get('fos_user.user_manager')->updateUser($entity);

            return $this->redirect($this->generateUrl('account'));
        }

        return $this->render('MembersBundle:AccountMember:edit.html.twig', array(
                    'entity' => $entity,
                    'status' => $status,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a AccountMember entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MembersBundle:AccountMember')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AccountMember entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('account'));
    }

    /**
     * Creates a form to delete a AccountMember entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('account_delete', array('id' => $id)))
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
