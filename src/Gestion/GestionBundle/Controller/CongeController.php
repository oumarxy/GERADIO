<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestion\GestionBundle\Entity\Conge;
use Gestion\GestionBundle\Form\CongeType;

/**
 * Conge controller.
 *
 */
class CongeController extends Controller {

    /**
     * Lists all Conge entities.
     *
     */
    public function indexAction($idemp) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $conge = new Conge();
        $form_conge = $this->createCreateForm($conge, $idemp);
        $entities = $em->getRepository('GestionBundle:Conge')->findByEmploye($employe);

        return $this->render('GestionBundle:Conge:index.html.twig', array(
                    'entities' => $entities,
                    'employe' => $employe,
                    'form_conge' => $form_conge->createView(),
        ));
    }

    public function conge_pdfAction($idconge, $idemp) {
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

        $entity = $em->getRepository('GestionBundle:Conge')->find($idconge);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conge entity.');
        }

        $filename = time() . '.pdf';
        $html = $this->renderView('GestionBundle:Conge:conge_pdf.html.twig', array(
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
     * Creates a new Conge entity.
     *
     */
    public function createAction(Request $request, $idemp) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }
        $entity = new Conge();
        $form = $this->createCreateForm($entity, $idemp);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setEmploye($employe);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('conge', array('idemp' => $entity->getEmploye()->getId())));
        }

        return $this->render('GestionBundle:Conge:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Conge entity.
     *
     * @param Conge $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Conge $entity, $idemp) {
		$this->securityControle();
        $form = $this->createForm(new CongeType(), $entity, array(
            'action' => $this->generateUrl('conge_create', array('idemp' => $idemp)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Conge entity.
     *
     */
    public function newAction($idemp) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }
        $entity = new Conge();
        $form = $this->createCreateForm($entity, $idemp);
        $entity->setEmploye($employe);

        return $this->render('GestionBundle:Conge:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Conge entity.
     *
     */
    public function showAction($id) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Conge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Conge:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Conge entity.
     *
     */
    public function editAction($id) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Conge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conge entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Conge:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Conge entity.
     *
     * @param Conge $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Conge $entity) {
		$this->securityControle();
        $form = $this->createForm(new CongeType(), $entity, array(
            'action' => $this->generateUrl('conge_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Edits an existing Conge entity.
     *
     */
    public function updateAction(Request $request, $id) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Conge')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conge entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('conge_show', array('id' => $id)));
        }

        return $this->render('GestionBundle:Conge:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Conge entity.
     *
     */
    public function deleteAction(Request $request, $id) {
		$this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Conge')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Conge entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('conge'));
    }

    /**
     * Creates a form to delete a Conge entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
		$this->securityControle();
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('conge_delete', array('id' => $id)))
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
