<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\GestionBundle\Entity\Contrat;
use Gestion\GestionBundle\Form\ContratType;

/**
 * Contrat controller.
 *
 */
class ContratController extends Controller
{

    /**
     * Lists all Contrat entities.
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
		
         $contrat = new Contrat();
        $form_contrat = $this->createCreateForm($contrat, $idemp);
        $entities = $em->getRepository('GestionBundle:Contrat')->findByEmploye($employe);

        return $this->render('GestionBundle:Contrat:index.html.twig', array(
            'entities' => $entities,
			'employe' => $employe,
            'form_contrat' => $form_contrat->createView(),
        ));
    }
    /**
     * Creates a new Contrat entity.
     *
     */
    public function createAction(Request $request, $idemp)
    {
		$this->securityControle();
		$em = $this->getDoctrine()->getManager();
		$employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
		if(!$employe){
			throw $this->createNotFoundException('Employe inexistant');
		}
		
        $entity = new Contrat();
        $form = $this->createCreateForm($entity, $idemp);
        $form->handleRequest($request);

        if ($form->isValid()) {
			if (null === $entity->getFile()) {
                return $this->redirect($this->generateUrl('contrat', array('idemp' => $idemp)));
            }
            $em = $this->getDoctrine()->getManager();
			$entity->setEmploye($employe);
			$this->uploadSecurity($entity);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contrat', array('idemp' => $entity->getEmploye()->getId())));
        }

        return $this->render('GestionBundle:Contrat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
	
	
	
    private function uploadSecurity($entity) {
		$this->securityControle();
        if (null === $entity->getFile()) {
            return;
        }
        $file = $entity->getFile();
        $originalName = $file->getClientOriginalName();
        $name_array = explode('.', $originalName);
        $file_type = $name_array[sizeof($name_array) - 1];
        $valid_file_types = array('pdf', 'PDF');
        if (in_array(strtolower($file_type), $valid_file_types)) {
            // start uploading
            $entity->upload();
        } else {
            throw $this->createNotFoundException('extension image invalide.');
        }
    }

    /**
     * Creates a form to create a Contrat entity.
     *
     * @param Contrat $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Contrat $entity, $idemp)
    {
		$this->securityControle();
        $form = $this->createForm(new ContratType(), $entity, array(
            'action' => $this->generateUrl('contrat_create',array('idemp' => $idemp)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Contrat entity.
     *
     */
    public function newAction($idemp)
    {
		$this->securityControle();
		 $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
		if(!$employe){
			throw $this->createNotFoundException('Employe inexistant');
		}
        $entity = new Contrat();
         $form   = $this->createCreateForm($entity, $idemp);
		$entity->setEmploye($employe);

        return $this->render('GestionBundle:Contrat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contrat entity.
     *
     */
    public function showAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Contrat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Contrat:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Contrat entity.
     *
     */
    public function editAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Contrat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrat entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Contrat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Contrat entity.
    *
    * @param Contrat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contrat $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new ContratType(), $entity, array(
            'action' => $this->generateUrl('contrat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }
    /**
     * Edits an existing Contrat entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Contrat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
			 $this->uploadSecurity($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contrat_show', array('id' => $id)));
        }

        return $this->render('GestionBundle:Contrat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Contrat entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Contrat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contrat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contrat'));
    }

    /**
     * Creates a form to delete a Contrat entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
		$this->securityControle();
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contrat_delete', array('id' => $id)))
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
