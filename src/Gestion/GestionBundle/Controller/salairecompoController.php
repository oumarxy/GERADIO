<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\GestionBundle\Entity\salairecompo;
use Gestion\GestionBundle\Form\salairecompoType;

/**
 * salairecompo controller.
 *
 */
class salairecompoController extends Controller {

    /**
     * Lists all salairecompo entities.
     *
     */
    public function indexAction() {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionBundle:salairecompo')->findAll();

        return $this->render('GestionBundle:salairecompo:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new salairecompo entity.
     *
     */
    public function createAction(Request $request) {

        $this->securityControle();
        $entity = new salairecompo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('salairecompo_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionBundle:salairecompo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a salairecompo entity.
     *
     * @param salairecompo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(salairecompo $entity) {

        $this->securityControle();
        $form = $this->createForm(new salairecompoType(), $entity, array(
            'action' => $this->generateUrl('salairecompo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new salairecompo entity.
     *
     */
    public function newAction() {

        $this->securityControle();
        $entity = new salairecompo();
        $form = $this->createCreateForm($entity);

        return $this->render('GestionBundle:salairecompo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a salairecompo entity.
     *
     */
    public function showAction($id) {

        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:salairecompo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find salairecompo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:salairecompo:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing salairecompo entity.
     *
     */
    public function editAction($id) {

        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:salairecompo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find salairecompo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:salairecompo:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     *  facturation de certains produits d'un client donné
     */
    public function salaireEmployeAction(Request $request, $idemp) {

        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $banque = $em->getRepository('GestionBundle:Banque')->findByEmploye($employe);
        if (!$banque) {
            throw $this->createNotFoundException('Banque inexistant');
        }
        $banque = $banque[count($banque)-1];
        $contrat = $em->getRepository('GestionBundle:Contrat')->findByEmploye($employe);
        if (!$contrat) {
            throw $this->createNotFoundException('Contrat inexistant');
        }
        $contrat = $contrat[count($contrat)-1];
        $salairecompos = $em->getRepository('GestionBundle:salairecompo')->findAll();
        $tableauCompo = array();

        foreach ($salairecompos as $salairecompo) {
            $compo = 'compo' . $salairecompo->getId();
            $testsalaire = $request->request->get("$compo");

            if ($testsalaire === "on") {
                $tableauCompo[$salairecompo->getId()] = $salairecompo;
            }
        }
        $filename = time() . '.pdf';
        $html = $this->renderView('GestionBundle:Salaire:salaire_pdf.html.twig', array(
            'tableauCompo' => $tableauCompo,
            'employe' => $employe,
            'banque' => $banque,
            'contrat' => $contrat,
        ));
        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => "attachment;filename=$filename",
            'charset' => 'UTF-8'
                )
        );
    }

    /**
     * Creates a form to edit a salairecompo entity.
     *
     * @param salairecompo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(salairecompo $entity) {
        $this->securityControle();
        $form = $this->createForm(new salairecompoType(), $entity, array(
            'action' => $this->generateUrl('salairecompo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Edits an existing salairecompo entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:salairecompo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find salairecompo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('salairecompo_show', array('id' => $id)));
        }

        return $this->render('GestionBundle:salairecompo:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a salairecompo entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:salairecompo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find salairecompo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('salairecompo'));
    }

    /**
     * Creates a form to delete a salairecompo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $this->securityControle();
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('salairecompo_delete', array('id' => $id)))
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
