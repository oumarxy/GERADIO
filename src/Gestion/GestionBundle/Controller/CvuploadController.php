<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\GestionBundle\Entity\Cvupload;
use Gestion\GestionBundle\Form\CvuploadType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Cvupload controller.
 *
 */
class CvuploadController extends Controller {

    /**
     * Lists all Cvupload entities.
     *
     */
    public function indexAction($idemp) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $cvupload = new Cvupload();
        $form_cvupload = $this->createCreateForm($cvupload, $idemp);
        $entities = $em->getRepository('GestionBundle:Cvupload')->findByEmploye($employe);


        return $this->render('GestionBundle:Cvupload:index.html.twig', array(
                    'entities' => $entities,
                    'employe' => $employe,
                    'form_cvupload' => $form_cvupload->createView(),
        ));
    }

    /**
     * Creates a new Cvupload entity.
     *
     */
    public function createAction(Request $request, $idemp) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $entity = new Cvupload();
        $form = $this->createCreateForm($entity, $idemp);
        $form->handleRequest($request);

        if ($form->isValid()) {
            if (null === $entity->getFile()) {
                
                return $this->redirect($this->generateUrl('cvupload', array('idemp' => $idemp)));
            }
            $em = $this->getDoctrine()->getManager();
            $entity->setEmploye($employe);
            $this->uploadSecurity($entity);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cvupload', array('idemp' => $idemp)));
        }

        return $this->render('GestionBundle:Cvupload:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
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
     * Creates a form to create a Cvupload entity.
     *
     * @param Cvupload $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cvupload $entity, $idemp) {
		$this->securityControle();
        $form = $this->createForm(new CvuploadType(), $entity, array(
            'action' => $this->generateUrl('cvupload_create', array('idemp' => $idemp)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Cvupload entity.
     *
     */
    public function newAction($idemp) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $entity = new Cvupload();
        $form = $this->createCreateForm($entity, $idemp);
        $entity->setEmploye($employe);

        $form = $this->createForm(CvuploadType::class, $cvupload);
        $form->handleRequest($request);

        return $this->render('GestionBundle:Cvupload:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cvupload entity.
     *
     */
    public function showAction($id) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Cvupload')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cvupload entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Cvupload:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cvupload entity.
     *
     */
    public function editAction($id) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Cvupload')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cvupload entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Cvupload:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Cvupload entity.
     *
     * @param Cvupload $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Cvupload $entity) {
		$this->securityControle();
        $form = $this->createForm(new CvuploadType(), $entity, array(
            'action' => $this->generateUrl('cvupload_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Edits an existing Cvupload entity.
     *
     */
    public function updateAction(Request $request, $id) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Cvupload')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cvupload entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $this->uploadSecurity($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cvupload_show', array('id' => $id)));
        }

        return $this->render('GestionBundle:Cvupload:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cvupload entity.
     *
     */
    public function deleteAction(Request $request, $id) {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Cvupload')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cvupload entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cvupload'));
    }

    /**
     * Creates a form to delete a Cvupload entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
		$this->securityControle();
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('cvupload_delete', array('id' => $id)))
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
