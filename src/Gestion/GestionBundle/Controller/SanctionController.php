<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\GestionBundle\Entity\Sanction;
use Gestion\GestionBundle\Form\SanctionType;

/**
 * Sanction controller.
 *
 */
class SanctionController extends Controller
{

    /**
     * Lists all Sanction entities.
     *
     */
    public function indexAction($idemp)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
		$employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }
		$sanction = new Sanction();
        $form_sanction = $this->createCreateForm($sanction, $idemp);
        $entities = $em->getRepository('GestionBundle:Sanction')->findByEmploye($employe);

        return $this->render('GestionBundle:Sanction:index.html.twig', array(
            'entities' => $entities,
			'employe' => $employe,
            'form_sanction' => $form_sanction->createView(),
        ));
    }
    /**
     * Creates a new Sanction entity.
     *
     */
    public function createAction(Request $request,$idemp)
    {
		$this->securityControle();
		$em = $this->getDoctrine()->getManager();
		$employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
		if(!$employe){
			throw $this->createNotFoundException('Employe inexistant');
		}
		
        $entity = new Sanction();
        $form = $this->createCreateForm($entity, $idemp);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$entity->setEmploye($employe);
			
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sanction', array('idemp' => $entity->getEmploye()->getId())));
        }

        return $this->render('GestionBundle:Sanction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Sanction entity.
     *
     * @param Sanction $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sanction $entity,$idemp)
    {
		$this->securityControle();
        $form = $this->createForm(new SanctionType(), $entity, array(
            'action' => $this->generateUrl('sanction_create',array('idemp' => $idemp)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Sanction entity.
     *
     */
    public function newAction()
    {
		$this->securityControle();
        $entity = new Sanction();
        $form   = $this->createCreateForm($entity);

        return $this->render('GestionBundle:Sanction:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sanction entity.
     *
     */
    public function showAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Sanction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sanction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Sanction:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sanction entity.
     *
     */
    public function editAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Sanction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sanction entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Sanction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Sanction entity.
    *
    * @param Sanction $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Sanction $entity)
    {
        $form = $this->createForm(new SanctionType(), $entity, array(
            'action' => $this->generateUrl('sanction_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }
    /**
     * Edits an existing Sanction entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Sanction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sanction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sanction_show', array('id' => $id)));
        }

        return $this->render('GestionBundle:Sanction:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Sanction entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Sanction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sanction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sanction'));
    }

    /**
     * Creates a form to delete a Sanction entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
		$this->securityControle();
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sanction_delete', array('id' => $id)))
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
