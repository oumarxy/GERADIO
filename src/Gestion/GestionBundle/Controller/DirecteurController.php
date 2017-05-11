<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\GestionBundle\Entity\Directeur;
use Gestion\GestionBundle\Form\DirecteurType;

/**
 * Directeur controller.
 *
 */
class DirecteurController extends Controller
{

    /**
     * Lists all Directeur entities.
     *
     */
    public function indexAction()
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

		$directeur = new Directeur();
        $form_directeur = $this->createCreateForm($directeur);
        $entities = $em->getRepository('GestionBundle:Directeur')->findAll();

        return $this->render('GestionBundle:Directeur:index.html.twig', array(
            'entities' => $entities,
			'form_directeur' => $form_directeur->createView()
        ));
    }
    /**
     * Creates a new Directeur entity.
     *
     */
    public function createAction(Request $request)
    {
		$this->securityControle();
        $entity = new Directeur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('directeur'));
        }

        return $this->render('GestionBundle:Directeur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Directeur entity.
     *
     * @param Directeur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Directeur $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new DirecteurType(), $entity, array(
            'action' => $this->generateUrl('directeur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Directeur entity.
     *
     */
    public function newAction()
    {
		$this->securityControle();
        $entity = new Directeur();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionBundle:Directeur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Directeur entity.
     *
     */
    public function showAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Directeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Directeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Directeur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Directeur entity.
     *
     */
    public function editAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Directeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Directeur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Directeur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Directeur entity.
    *
    * @param Directeur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Directeur $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new DirecteurType(), $entity, array(
            'action' => $this->generateUrl('directeur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Directeur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Directeur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Directeur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('directeur_edit', array('id' => $id)));
        }

        return $this->render('GestionBundle:Directeur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Directeur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Directeur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Directeur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('directeur'));
    }

    /**
     * Creates a form to delete a Directeur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
		$this->securityControle();
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('directeur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Effacer'))
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
