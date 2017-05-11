<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ventes\VentesBundle\Entity\DetailsProduits;
use Ventes\VentesBundle\Form\DetailsProduitsType;

/**
 * DetailsProduits controller.
 *
 */
class DetailsProduitsController extends Controller {

    /**
     * Lists all DetailsProduits entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VentesBundle:DetailsProduits')->findAll();

        return $this->render('VentesBundle:DetailsProduits:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * gestion ajax du remplissage de datails produits lors  du choix des produits
     * pour la facturation 
     */
    public function infosProdAction($id) {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('VentesBundle:Produit')->findOneBy(array('id' => $id));
        if ($produit) {
            $refProd = $produit->getRefProd();
            $catproduit = $produit->getCategorieProduit();
            $prixHT = $catproduit->getPrixHT();
        } else {
            $refProd = null;
            $prixHT = null;
        }
        $response = new JsonResponse();
        return $response->setData(array('reference' => $refProd, 'prixHT' => $prixHT));
    }

    /**
     * Creates a new DetailsProduits entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new DetailsProduits();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('detailsproduits_show', array('id' => $entity->getId())));
        }

        return $this->render('VentesBundle:DetailsProduits:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DetailsProduits entity.
     *
     * @param DetailsProduits $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DetailsProduits $entity) {
        $form = $this->createForm(new DetailsProduitsType(), $entity, array(
            'action' => $this->generateUrl('detailsproduits_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * remplissage des libelles de produits pour la facturation par ajax
     */
    private function ajoutProduits() {
        $em = $this->getDoctrine()->getManager();
        $produis = $em->getRepository('VentesBundle:Produit')->findAll();
        $produitArray = array();
        foreach ($produis as $p) {
            $id = $p->getId();
            $libelle = $p->getLibelle();
            $produitArray[$id] = $libelle;
        }
        return $produitArray;
    }

    /**
     * Displays a form to create a new DetailsProduits entity.
     *
     */
    public function newAction() {
        $entity = new DetailsProduits();
        $form = $this->createCreateForm($entity);

        return $this->render('VentesBundle:DetailsProduits:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DetailsProduits entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:DetailsProduits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetailsProduits entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:DetailsProduits:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DetailsProduits entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:DetailsProduits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetailsProduits entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:DetailsProduits:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a DetailsProduits entity.
     *
     * @param DetailsProduits $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(DetailsProduits $entity) {
        $form = $this->createForm(new DetailsProduitsType(), $entity, array(
            'action' => $this->generateUrl('detailsproduits_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing DetailsProduits entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:DetailsProduits')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DetailsProduits entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('detailsproduits_edit', array('id' => $id)));
        }

        return $this->render('VentesBundle:DetailsProduits:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DetailsProduits entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:DetailsProduits')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DetailsProduits entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('detailsproduits'));
    }

    /**
     * Creates a form to delete a DetailsProduits entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('detailsproduits_delete', array('id' => $id)))
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
                !$this->getUser()->hasRole('ROLE_COMMERCIAL')
        ) {
            // throw $this->createAccessDeniedException('Accès interdit');
            return $this->redirect($this->generateUrl('ventes_accueil'));
        }
    }
}
