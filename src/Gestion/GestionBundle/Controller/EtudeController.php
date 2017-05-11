<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\GestionBundle\Entity\Etude;
use Gestion\GestionBundle\Form\EtudeType;

/**
 * Etude controller.
 *
 */
class EtudeController extends Controller
{

    /**
     * Lists all Etude entities.
     *
     */
    public function indexAction()
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

		$etude = new Etude();
        $form_etude = $this->createCreateForm($etude);
        $entities = $em->getRepository('GestionBundle:Etude')->findAll();

        return $this->render('GestionBundle:Etude:index.html.twig', array(
            'entities' => $entities,
			'form_etude' => $form_etude->createView()
        ));
    }
    /**
     * Creates a new Etude entity.
     *
     */
    public function createAction(Request $request)
    {
		$this->securityControle();
        $entity = new Etude();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('etude'));
        }

        return $this->render('GestionBundle:Etude:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Etude entity.
     *
     * @param Etude $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Etude $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new EtudeType(), $entity, array(
            'action' => $this->generateUrl('etude_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Etude entity.
     *
     */
    public function newAction()
    {
		$this->securityControle();
        $entity = new Etude();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionBundle:Etude:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Etude entity.
     *
     */
    public function showAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Etude')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etude entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Etude:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Etude entity.
     *
     */
    public function editAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Etude')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etude entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Etude:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Etude entity.
    *
    * @param Etude $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Etude $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new EtudeType(), $entity, array(
            'action' => $this->generateUrl('etude_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }
    /**
     * Edits an existing Etude entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Etude')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etude entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('etude_edit', array('id' => $id)));
        }

        return $this->render('GestionBundle:Etude:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Etude entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Etude')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Etude entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('etude'));
    }

    /**
     * Creates a form to delete a Etude entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
		$this->securityControle();
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etude_delete', array('id' => $id)))
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
