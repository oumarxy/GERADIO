<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ventes\VentesBundle\Entity\Produit;
use Ventes\VentesBundle\Form\ProduitType;

/**
 * Produit controller.
 *
 */
class ProduitController extends Controller {

    /**
     * Lists all Produit entities.
     *
     */
    public function indexAction($idcli) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('VentesBundle:Client')->find($idcli);
        if (!$client) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }
        $entity = new Produit();
        $form = $this->createCreateForm($entity, $client);
        $entities = $em->getRepository('VentesBundle:Produit')->findBy(array('client' => $client));
        return $this->render('VentesBundle:Produit:index.html.twig', array(
                    'entities' => $entities,
                    'client' => $client,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Produit entity.
     *
     */
    public function createAction(Request $request, $idcli) {
        $this->securityControle();
        $entity = new Produit();
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('VentesBundle:Client')->find($idcli);
        if (!$client) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }
        $form = $this->createCreateForm($entity, $client);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setClient($client);
            $em = $this->getDoctrine()->getManager();

            /**
             * la quantite et l'etat ne sont pas gerés pour le moment dans le systeme
             * d'où quantite =0 et etat =disponible
             */
            $entity->setTotalVendu(0);
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            $entity->setEtat('Disponible');
            $entity->setRefProd('R');
            $em->persist($entity);
            $em->flush();
            $this->gestionReference($entity);
            return $this->redirect($this->generateUrl('produit_show', array('id' => $entity->getId())));
        }

        return $this->render('VentesBundle:Produit:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    private function gestionReference($entity) {
        $em = $this->getDoctrine()->getManager();
        $numero = $entity->getId();
        $type = substr($entity->getLibelle(), 0, 1);
        $entity->setRefProd('R' . $numero . $type);
        $em->merge($entity);
        $em->flush();
        return null;
    }

    /**
     * Creates a form to create a Produit entity.
     *
     * @param Produit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Produit $entity, $client) {
        $form = $this->createForm(new ProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_create', array('idcli' => $client->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Produit entity.
     *
     */
    public function newAction() {
        $this->securityControle();
        $entity = new Produit();
        $form = $this->createCreateForm($entity, $idcli = 0);

        return $this->render('VentesBundle:Produit:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Produit entity.
     *
     */
    public function showAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Produit:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Produit entity.
     *
     */
    public function editAction($id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VentesBundle:Produit:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Produit entity.
     *
     * @param Produit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Produit $entity) {
        $form = $this->createForm(new ProduitType(), $entity, array(
            'action' => $this->generateUrl('produit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Produit entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->securityControle();
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VentesBundle:Produit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setUtilisateur($this->getUser());
            $entity->setLastUpdate(new \DateTime());
            $em->flush();
            return $this->redirect($this->generateUrl('produit', array('idcli'=> $entity->getClient()->getId())));
        }

        return $this->render('VentesBundle:Produit:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Produit entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->securityControle();
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VentesBundle:Produit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('produit'));
    }

    /**
     * Creates a form to delete a Produit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('produit_delete', array('id' => $id)))
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
