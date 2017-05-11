<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestion\GestionBundle\Entity\Mission;
use Gestion\GestionBundle\Form\MissionType;

/**
 * Mission controller.
 *
 */
class MissionController extends Controller
{

    /**
     * Lists all Mission entities.
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
		
		$mission = new Mission();
        $form_mission = $this->createCreateForm($mission, $idemp);
        $entities = $em->getRepository('GestionBundle:Mission')->findByEmploye($employe);


        return $this->render('GestionBundle:Mission:index.html.twig', array(
            'entities' => $entities,
			'employe' => $employe,
            'form_mission' => $form_mission->createView(),
        ));
    }
	
	
	 public function mission_pdfAction($idmission,$idemp)
    {
		$this->securityControle();
         $em = $this->getDoctrine()->getManager();
		$employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }
	   $directeurs = $em->getRepository('GestionBundle:Directeur')->findAll();
        if (!$directeurs) {
            throw $this->createNotFoundException('Directeur inexistant');
        }
		$entity = $em->getRepository('GestionBundle:Mission')->find($idmission);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mission entity.');
        }

         $filename = time() . '.pdf';
         $html = $this->renderView('GestionBundle:Mission:mission_pdf.html.twig', array(
            'entity' => $entity,
			'employe' => $employe,
			'directeurs' => $directeurs,
        ));
		
		 return new Response(
                        $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => "filename=$filename",
                    'charset' => 'UTF-8'
                        )
                );
    }
    /**
     * Creates a new Mission entity.
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
		
        $entity = new Mission();
        $form = $this->createCreateForm($entity, $idemp);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			$entity->setEmploye($employe);
			
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mission', array('idemp' => $entity->getEmploye()->getId())));
        }

        return $this->render('GestionBundle:Mission:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Mission entity.
     *
     * @param Mission $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Mission $entity, $idemp)
    {
		$this->securityControle();
        $form = $this->createForm(new MissionType(), $entity, array(
            'action' => $this->generateUrl('mission_create',array('idemp' => $idemp)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Mission entity.
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
        $entity = new Mission();
        $form   = $this->createCreateForm($entity, $idemp);
		$entity->setEmploye($employe);

        return $this->render('GestionBundle:Mission:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mission entity.
     *
     */
    public function showAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Mission')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mission entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Mission:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mission entity.
     *
     */
    public function editAction($id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Mission')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mission entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Mission:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Mission entity.
    *
    * @param Mission $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Mission $entity)
    {
		$this->securityControle();
        $form = $this->createForm(new MissionType(), $entity, array(
            'action' => $this->generateUrl('mission_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }
    /**
     * Edits an existing Mission entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Mission')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mission entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('mission_show', array('id' => $id)));
        }

        return $this->render('GestionBundle:Mission:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Mission entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Mission')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mission entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mission'));
    }

    /**
     * Creates a form to delete a Mission entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
		$this->securityControle();
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mission_delete', array('id' => $id)))
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
