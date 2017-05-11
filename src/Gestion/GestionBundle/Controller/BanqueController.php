<?php

namespace Gestion\GestionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Gestion\GestionBundle\Entity\Banque;
use Gestion\GestionBundle\Form\BanqueType;
use Gestion\GestionBundle\Entity\salairecompo;
use Gestion\GestionBundle\Form\salairecompoType;

/**
 * Banque controller.
 *
 */
class BanqueController extends Controller {

    /**
     * Lists all Banque entities.
     *
     */
    public function indexAction($idemp) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }
        $entities = $em->getRepository('GestionBundle:Banque')->findByEmploye($employe);

        $salairecompo = new salairecompo();
        $form_salairecompo = $this->SalaireForm($salairecompo);
        $salairecompos = $em->getRepository('GestionBundle:salairecompo')->findAll();

        return $this->render('GestionBundle:Banque:index.html.twig', array(
                    'entities' => $entities,
                    'employe' => $employe,
                    'salairecompo' => $salairecompos,
                    'form_salairecompo' => $form_salairecompo->createView(),
        ));
    }

    /**
     * paiement salaire.
     *
     */
    public function paiesalaireAction(Request $request, $idemp) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $salairecompos = $em->getRepository('GestionBundle:salairecompo')->findAll();
        $tableauCompo = array();

        foreach ($salairecompos as $salairecompo) {
            $compo = 'compo' . $salairecompo->getId();
            $testsalaire = $request->request->get("$compo");
            if ($testsalaire === "on") {
                $tableauCompo[$salairecompo->getId()] = $salairecompo;
            }
        }

        return $this->render('GestionBundle:Banque:new.html.twig', array(
                    'tableauCompo' => $tableauCompo,
                    'employe' => $employe,
        ));
    }

    /**
     * Creates a new Banque entity.
     *
     */
    public function createAction(Request $request, $idemp) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }

        $salairecompos = $em->getRepository('GestionBundle:salairecompo')->findAll();
        $tableauCompo = array();

        foreach ($salairecompos as $salairecompo) {
            $compo = 'compo' . $salairecompo->getId();
            $testsalaire = $request->request->get("$compo");
            if ($testsalaire === "on") {
                $tableauCompo[$salairecompo->getId()] = $salairecompo;
            }
        }

        $libbanque = $request->request->get('libbanque');
        $datedebut = $request->request->get('datedebut');
        $datefin = $request->request->get('datefin');

        $datedebut = new \DateTime($datedebut);
        $datefin = new \DateTime($datefin);

        $salaire = new Banque();
        $salaire->setLibbanque($libbanque);
        $salaire->setDated($datedebut);
        $salaire->setDatef($datefin);
        $salaire->setSalairecompoTable($tableauCompo);
        $salaire->setEmploye($employe);

        $em->persist($salaire);
        $em->flush();

        return $this->redirect($this->generateUrl('banque', array('idemp' => $idemp)));
    }

    /**
     * Creates a form to create a Banque entity.
     *
     * @param Banque $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Banque $entity, $idemp) {
        $this->securityControle();
        $form = $this->createForm(new BanqueType(), $entity, array(
            'action' => $this->generateUrl('banque_create', array('idemp' => $idemp)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Displays a form to create a new Banque entity.
     *
     */
    public function newAction($idemp) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }



        $entity = new Banque();
        $form = $this->createCreateForm($entity, $idemp);
        $entity->setEmploye($employe);

        return $this->render('GestionBundle:Banque:new.html.twig', array(
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
    private function SalaireForm(salairecompo $entity) {
        $this->securityControle();
        $form = $this->createForm(new salairecompoType(), $entity, array(
            'action' => $this->generateUrl('salairecompo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new salairecompo entity.
     *
     */
    public function newAction_salaire() {
        $this->securityControle();
        $entity = new salairecompo();
        $form = $this->SalaireForm($entity);

        return $this->render('GestionBundle:salairecompo:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Banque entity.
     *
     */
    public function showAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Banque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Banque entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Banque:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Banque entity.
     *
     */
    public function editAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Banque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Banque entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionBundle:Banque:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Banque entity.
     *
     * @param Banque $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Banque $entity) {
        $this->securityControle();
        $form = $this->createForm(new BanqueType(), $entity, array(
            'action' => $this->generateUrl('banque_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Valider'));

        return $form;
    }

    /**
     * Edits an existing Banque entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionBundle:Banque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Banque entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('banque_edit', array('id' => $id)));
        }

        return $this->render('GestionBundle:Banque:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Banque entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionBundle:Banque')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Banque entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('banque'));
    }

    /**
     * Creates a form to delete a Banque entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        $this->securityControle();
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('banque_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Effacer'))
                        ->getForm()
        ;
    }
    
      /**
     * 
     * generer le bulletin de salaire
     */
    
        public function salaire_pdfAction($idbanque, $idemp) {
		$this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionBundle:Employe')->find($idemp);
        if (!$employe) {
            throw $this->createNotFoundException('Employe inexistant');
        }


        $entity = $em->getRepository('GestionBundle:Banque')->find($idbanque);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Banque entity.');
        }

        $filename = time() . '.pdf';
        $html = $this->renderView('GestionBundle:Banque:salaire_pdf.html.twig', array(
            'entity' => $entity,
            'employe' => $employe,
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
