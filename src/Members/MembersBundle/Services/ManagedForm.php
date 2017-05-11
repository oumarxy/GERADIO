<?php

namespace Members\MembersBundle\Services;

use \Doctrine\ORM\EntityRepository;

class ManagedForm {

    /*
    public function ajoutProduits() {

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
    */

}
