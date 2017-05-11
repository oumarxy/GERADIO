<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ventes\VentesBundle\Entity\Operation;
use Ventes\VentesBundle\Form\OperationType;
use Ventes\VentesBundle\Modules\ChiffreLettre;

/**
 * Operation controller.
 *
 */
class OperationController extends Controller {

    /**
     * Lists all Operation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentesBundle:Operation')->findAll();

        return $this->render('VentesBundle:Operation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * journal view
     *
     */
    public function journalAction() {

        return $this->render('VentesBundle:Operation:journal_caisse.html.twig');
    }

    /**
     * bon  print
     *
     */
    public function bonAction($idop) {
        $em = $this->getDoctrine()->getManager();
        $operation = $em->getRepository('VentesBundle:Operation')->find($idop);
        if (!$operation) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }
        $chiffreLettre = new ChiffreLettre();
        $montant = $operation->getMontant();
        $chiffre_en_lettre = $chiffreLettre->convert_number_to_words($montant);

        $html = $this->renderView('VentesBundle::sections_ventes/Operation_pdf.html.twig', array('chiffre_en_lettre' => $chiffre_en_lettre, 'entity' => $operation));
        $filename = 'bon.pdf';
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * journal view print
     *
     */
    public function journalEtatAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dated = new \DateTime($request->request->get('datedebut'));
        $datef = new \DateTime($request->request->get('datefin'));
        $datedebut = date_format($dated, 'Y-m-d');
        $datefin = date_format($datef, 'Y-m-d');

        $encaissements = $em->getRepository('VentesBundle:Encaissement')->ParJournal($datedebut, $datefin);
        $operations = $em->getRepository('VentesBundle:Operation')->ParJournal($datedebut, $datefin);

        $html = $this->renderView('VentesBundle::sections_ventes/journal_pdf.html.twig', array('datedebut' => $datedebut, 'datefin' => $datefin, 'operations' => $operations, 'encaissements' => $encaissements));
        $filename = 'journal.pdf';
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "attachment;filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * Creates a new Operation entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Operation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());

            /**  gestion date pour le CA  * ****** */
            $today = new \DateTime();
            $year = date_format($today, 'Y');
            $month = date_format($today, 'm');
            $day = date_format($today, 'Y-m-d');
            $entity->setAnnee($year);
            $entity->setMois($month);
            $entity->setDateFormat(new \DateTime($day));
            /*             * *** fin *** */
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('operation_show', array('id' => $entity->getId())));
        }

        return $this->render('VentesBundle:Operation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Operation entity.
     *
     * @param Operation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Operation $entity) {
        $form = $this->createForm(new OperationType(), $entity, array(
            'action' => $this->generateUrl('operation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Operation entity.
     *
     */
    public function newAction() {
        $entity = new Operation();
        $form = $this->createCreateForm($entity);

        return $this->render('VentesBundle:Operation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Operation entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Operation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Operation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Operation entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Operation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Operation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Operation entity.
     *
     * @param Operation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Operation $entity) {
        $form = $this->createForm(new OperationType(), $entity, array(
            'action' => $this->generateUrl('operation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Operation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Operation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Operation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());

            /**  gestion date pour le CA  * ****** */
            $today = new \DateTime();
            $year = date_format($today, 'Y');
            $month = date_format($today, 'm');
            $day = date_format($today, 'Y-m-d');
            $entity->setAnnee($year);
            $entity->setMois($month);
            $entity->setDateFormat(new \DateTime($day));
            /*             * *** fin *** */

            $em->flush();

            return $this->redirect($this->generateUrl('operation_show', array('id' => $id)));
        }

        return $this->render('VentesBundle:Operation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Operation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:Operation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Operation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('operation'));
    }

    /**
     * Creates a form to delete a Operation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('operation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }
  /**
     * 
     * controle des droits et aitorisations
     */
    private function securityControle() {
        if (
                !$this->getUser()->hasRole('ROLE_ADMIN') &&
                !$this->getUser()->hasRole('ROLE_COMPTABLE')
        ) {
            // throw $this->createAccessDeniedException('Accès interdit');
            return $this->redirect($this->generateUrl('ventes_accueil'));
        }
    }
}
