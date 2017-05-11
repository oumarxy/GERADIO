<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\GestionBundle\Entity\Absence;
use Gestion\GestionBundle\Form\AbsenceType;

/**
 * Absence controller.
 *
 */
class AbsenceController extends Controller {

    /**
     * Lists all Absence entities.
     *
     */
    public function indexAction($idemp) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $absence = new Absence();
        $form_absence = $this->createCreateForm($absence, $idemp);
        $entities = $em->getRepository('GestionBundle:Absence')->findByEmploye($employe);

        return $this->render('GestionBundle:Absence:index.html.twig', array(
                    'entities' => $entities,
                    'employe' => $employe,
                    'form_absence' => $form_absence->createView(),
        ));
    }

    /**
     * Creates a new Absence entity.
     *
     */
    public function createAction(Request $request, $idemp) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $entity = new Absence();
        $form = $this->createCreateForm($entity, $idemp);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setEmploye($employe);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('absence', array('idemp' => $entity->getEmploye()->getId())));
        }

        return $this->render('GestionBundle:Absence:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Absence entity.
     *
     * @param Absence $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Absence $entity, $idemp) {
        $this->securityControle();
        $form = $this->createForm(new AbsenceType(), $entity, array(
            'action' => $this->generateUrl('absence_create', array('idemp' => $idemp)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Absence entity.
     *
     */
    public function newAction($idemp) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }
        $entity = new Absence();
        $form = $this->createCreateForm($entity, $idemp);
        $entity->setEmploye($employe);

        return $this->render('GestionBundle:Absence:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Absence entity.
     *
     */
    public function showAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Absence:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Absence entity.
     *
     */
    public function editAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Absence:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Absence entity.
     *
     * @param Absence $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Absence $entity) {
        $this->securityControle();
        $form = $this->createForm(new AbsenceType(), $entity, array(
            'action' => $this->generateUrl('absence_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Edits an existing Absence entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('absence_show', array('id' => $id)));
        }

        return $this->render('GestionBundle:Absence:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Absence entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Absence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Absence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('absence'));
    }

    /**
     * Creates a form to delete a Absence entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $this->securityControle();
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('absence_delete', array('id' => $id)))
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
