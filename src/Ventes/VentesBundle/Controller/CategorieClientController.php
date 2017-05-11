<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ventes\VentesBundle\Entity\CategorieClient;
use Ventes\VentesBundle\Form\CategorieClientType;

/**
 * CategorieClient controller.
 *
 */
class CategorieClientController extends Controller
{

    /**
     * Lists all CategorieClient entities.
     *
     */
    public function indexAction()
    {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentesBundle:CategorieClient')->findAll();

        return $this->render('VentesBundle:CategorieClient:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CategorieClient entity.
     *
     */
    public function createAction(Request $request)
    {
        $this->securityControle();
        $entity = new CategorieClient();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categorieclient_show', array('id' => $entity->getId())));
        }

        return $this->render('VentesBundle:CategorieClient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CategorieClient entity.
     *
     * @param CategorieClient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CategorieClient $entity)
    {
        $form = $this->createForm(new CategorieClientType(), $entity, array(
            'action' => $this->generateUrl('categorieclient_create'),
            'method' => 'POST',
        ));
        
        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new CategorieClient entity.
     *
     */
    public function newAction()
    {
        $this->securityControle();
        $entity = new CategorieClient();
        $form   = $this->createCreateForm($entity);

        return $this->render('VentesBundle:CategorieClient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CategorieClient entity.
     *
     */
    public function showAction($id)
    {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:CategorieClient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategorieClient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:CategorieClient:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CategorieClient entity.
     *
     */
    public function editAction($id)
    {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:CategorieClient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategorieClient entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:CategorieClient:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CategorieClient entity.
    *
    * @param CategorieClient $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CategorieClient $entity)
    {
        $form = $this->createForm(new CategorieClientType(), $entity, array(
            'action' => $this->generateUrl('categorieclient_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing CategorieClient entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:CategorieClient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategorieClient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categorieclient_edit', array('id' => $id)));
        }

        return $this->render('VentesBundle:CategorieClient:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CategorieClient entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:CategorieClient')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CategorieClient entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categorieclient'));
    }

    /**
     * Creates a form to delete a CategorieClient entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorieclient_delete', array('id' => $id)))
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
