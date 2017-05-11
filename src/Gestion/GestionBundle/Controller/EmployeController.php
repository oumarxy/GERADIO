<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestion\GestionBundle\Entity\Employe;
use Gestion\GestionBundle\Form\EmployeType;

/**
 * Employe controller.
 *
 */
class EmployeController extends Controller {

    /**
     * Lists all Employe entities.
     *
     */
    public function indexAction() {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('GestionBundle:Employe')->findAll();
        return $this->render('GestionBundle:Employe:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function employe_pdfAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('GestionBundle:Employe')->findAll();
        $filename = 'employes.pdf';
        $html = $this->renderView('GestionBundle:Employe:employe_pdf.html.twig', array('entities' => $entities));
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * Creates a new Employe entity.
     *
     */
    public function createAction(Request $request) {
        $this->securityControle();
        $entity = new Employe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //gestion image
            $this->uploadSecurity($entity);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('employe'));
        }

        return $this->render('GestionBundle:Employe:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    private function uploadSecurity($entity) {
        if (null === $entity->getFile()) {
            return;
        }
        $image = $entity->getFile();
        $originalName = $image->getClientOriginalName();
        $name_array = explode('.', $originalName);
        $file_type = $name_array[sizeof($name_array) - 1];
        $valid_file_types = array('png', 'jpg', 'jpeg');
        if (in_array(strtolower($file_type), $valid_file_types)) {
            // start uploading
            $entity->upload();
        } else {
            throw $this->createNotFoundException('extension image invalide.');
        }
    }

    /**
     * Creates a form to create a Employe entity.
     *
     * @param Employe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Employe $entity) {
        $this->securityControle();
        $form = $this->createForm(new EmployeType(), $entity, array(
            'action' => $this->generateUrl('employe_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Employe entity.
     *
     */
    public function newAction() {
        $this->securityControle();
        $entity = new Employe();
        $form = $this->createCreateForm($entity);

        return $this->render('GestionBundle:Employe:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Employe entity.
     *
     */
    public function showAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Employe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Employe:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Employe entity.
     *
     */
    public function editAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Employe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Employe:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Employe entity.
     *
     * @param Employe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Employe $entity) {
        $this->securityControle();
        $form = $this->createForm(new EmployeType(), $entity, array(
            'action' => $this->generateUrl('employe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Edits an existing Employe entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Employe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Employe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            //gestion image
            $this->uploadSecurity($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('employe'));
        }

        return $this->render('GestionBundle:Employe:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Employe entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Employe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Employe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('employe'));
    }

    /**
     * Creates a form to delete a Employe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $this->securityControle();
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('employe_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Effacer'))
                        ->getForm()
        ;
    }

    /**
     * 
     * controle des droits et autorisations
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
