<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\GestionBundle\Entity\Fonction;
use Gestion\GestionBundle\Form\FonctionType;

/**
 * Fonction controller.
 *
 */
class FonctionController extends Controller
{

    /**
     * Lists all Fonction entities.
     *
     */
    public function indexAction()
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        
		 $fonction = new Fonction();
        $form_fonction = $this->createCreateForm($fonction);
        $entities = $em->getRepository('GestionBundle:Fonction')->findAll();

        return $this->render('GestionBundle:Fonction:index.html.twig', array(
            'entities' => $entities,
			'form_fonction' => $form_fonction->createView()
        ));
    }
    /**
     * Creates a new Fonction entity.
     *
     */
    public function createAction(Request $request)
    {
		$this->securityControle();
        $entity = new Fonction();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fonction'));
        }

        return $this->render('GestionBundle:Fonction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Fonction entity.
     *
     * @param Fonction $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fonction $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new FonctionType(), $entity, array(
            'action' => $this->generateUrl('fonction_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Fonction entity.
     *
     */
    public function newAction()
    {
		$this->securityControle();
        $entity = new Fonction();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionBundle:Fonction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fonction entity.
     *
     */
    public function showAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Fonction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fonction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Fonction:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fonction entity.
     *
     */
    public function editAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Fonction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fonction entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Fonction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Fonction entity.
    *
    * @param Fonction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Fonction $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new FonctionType(), $entity, array(
            'action' => $this->generateUrl('fonction_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }
    /**
     * Edits an existing Fonction entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Fonction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Fonction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fonction_edit', array('id' => $id)));
        }

        return $this->render('GestionBundle:Fonction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Fonction entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Fonction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Fonction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fonction'));
    }

    /**
     * Creates a form to delete a Fonction entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
		$this->securityControle();
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fonction_delete', array('id' => $id)))
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
