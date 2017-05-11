<?php

namespace Ventes\VentesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * Client controller.
 *
 */
class HomeController extends Controller {

    public function accueilAction() {
        return $this->render('@Ventes/Home/accueil.html.twig');
    }

    public function homeAction() {
        $em = $this->getDoctrine()->getManager();

        /////////////////////////////////////////// Chart chiffre d'affaire/mois
        $date = new \DateTime();
        $year = date_format($date, 'Y');
        $tableauCA = array();
        for ($i = 1; $i <= 12; $i++) {
            $caMois = 0;
            $encaissements = $em->getRepository('VentesBundle:Encaissement')->findBy(array('mois' => $i, 'annee' => $year));
            foreach ($encaissements as $encaissement) {
                $caMois += $encaissement->getMontant();
            }
            /////// Ajout des entrées ou sorties par operation de type espece  ou non car le champs montant est accessible meme si le type est un bien/////////
            $operations = $em->getRepository('VentesBundle:Operation')->findBy(array('mois' => $i, 'annee' => $year));
            foreach ($operations as $operation) {
                if ($operation->getFlux() == "Entrée") {
                    $caMois += $operation->getMontant();
                } elseif ($operation->getFlux() == "Sortie") {
                    $caMois -= $operation->getMontant();
                }
            }
            $tableauCA[$i] = $caMois;
        }
        $series = array(
            array("name" => "CA", "data" => array($tableauCA[1], $tableauCA[2], $tableauCA[3], $tableauCA[4], $tableauCA[5], $tableauCA[6], $tableauCA[7], $tableauCA[8], $tableauCA[9], $tableauCA[10], $tableauCA[11], $tableauCA[12])),
        );

        $ob = new Highchart();
        $ob->chart->renderTo('idlinechart');
        $ob->title->text('CHIFFRE D\'AFFAIRE');
        $ob->xAxis->title(array('text' => "Mois"));
        $ob->xAxis->categories(array('Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aout', 'Sept', 'Oct', 'Nov', 'Déc'));
        $ob->yAxis->title(array('text' => "Chiffre d'affaire"));
        $ob->series($series);

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $banque = 0;
        $caisse = 0;
        $comptant = 0;
        $credit = 0;

        $encaissements = $em->getRepository('VentesBundle:Encaissement')->findAll();
        foreach ($encaissements as $encaissement) {
            if ($encaissement->getDestination() == 'banque') {
                $banque += 1;
            }
            if ($encaissement->getDestination() == 'caisse') {
                $caisse += 1;
            }
            if ($encaissement->getMode() == 'credit') {
                $credit += 1;
            }
            if ($encaissement->getMode() == 'comptant') {
                $comptant += 1;
            }
        }

        /////////////////////////////////////////// PIE BANQUE/CAISSE
        $ob1 = new Highchart();
        $ob1->chart->renderTo('banqueCaissePie');
        $ob1->title->text('Destination des recettes');
        $ob1->colors('#7F8C8D', '#34495E');
        $ob1->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array('Banque', $banque),
            array('Caisse', $caisse)
        );
        $ob1->series(array(array('type' => 'pie', 'name' => 'Total', 'data' => $data)));

        /////////////////////////////////////////// PIE CREDIT/COMPTANT

        $ob2 = new Highchart();
        $ob2->chart->renderTo('creditComptantPie');
        $ob2->title->text('Les modes de paiements');
        $ob2->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array('Credit', $credit),
            array('Comptant', $comptant)
        );
        $ob2->series(array(array('type' => 'pie', 'name' => 'Total', 'data' => $data)));

        /////////////////////////////////////////// PIE CATEGORIE PRODUIT
        $ob3 = new Highchart();
        $ob3->chart->renderTo('categorieProduitPie');
        $ob3->title->text('Les meilleurs ventes');
        $ob3->colors('#2980B9', '#9B59B6', '#95a5a6', '#27ae60', '#8e44ad', '#f39c12', '#81CFE0');
        $ob3->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));

        $categorieProduits = $em->getRepository('VentesBundle:CategorieProduit')->findAll();
        $produits = $em->getRepository('VentesBundle:Produit')->findAll();

        $data = array();
        foreach ($categorieProduits as $categorieProduit) {
            $totalVendu = 0;
            foreach ($produits as $produit) {
                if ($produit->getCategorieProduit()->getId() == $categorieProduit->getId()) {
                    $totalVendu += $produit->getTotalVendu();
                }
            }

            $data[] = array($categorieProduit->getLibelle(), $totalVendu);
        }
        $ob3->series(array(array('type' => 'pie', 'name' => 'Total', 'data' => $data)));

        //////////////////////////////////////////// CHIFRRE D'AFFAIRE AUJOURD'HUI
        $chiffreAffaireAujourdhui = 0;
        //$today = date_format($date,'Y-m-d');
        $encaissementsAujourdhui = $em->getRepository('VentesBundle:Encaissement')->findBy(array('dateFormat' => $date));
        foreach ($encaissementsAujourdhui as $ca) {
            $chiffreAffaireAujourdhui += $ca->getMontant();
        }
        $operationsAujourdhui = $em->getRepository('VentesBundle:Operation')->findBy(array('dateFormat' => $date));
        foreach ($operationsAujourdhui as $operation) {
            if ($operation->getFlux() == "Entrée") {
                   $chiffreAffaireAujourdhui += $operation->getMontant();
                } elseif ($operation->getFlux() == "Sortie") {
                    $chiffreAffaireAujourdhui -= $operation->getMontant();
                }
        }
        
        //////////////////////////////////////////// CHIFRRE D'AFFAIRE CETTE ANNNEE
        $chiffreAffaireAnnee = 0;
        $caAnnee = $em->getRepository('VentesBundle:Encaissement')->findBy(array('annee' => $year));
        foreach ($caAnnee as $ca) {
            $chiffreAffaireAnnee += $ca->getMontant();
        }
        $operationsAnnee = $em->getRepository('VentesBundle:Operation')->findBy(array('annee' => $year));
        foreach ($operationsAnnee as $operation) {
             if ($operation->getFlux() == "Entrée") {
                  $chiffreAffaireAnnee += $operation->getMontant();
                } elseif ($operation->getFlux() == "Sortie") {
                    $chiffreAffaireAnnee -= $operation->getMontant();
                }
        }
         
        ///////////////////////Pas d'operation ici ////////////////////// TOTAL DES PRODUITS VENDUS AUJOURD'HUI
        $totalVenduDuJour = 0;
        $produitsVendusAujourdhui = $em->getRepository('VentesBundle:DetailsProduits')->findBy(array('date' => $date));

        foreach ($produitsVendusAujourdhui as $prod) {
            if ($prod->getFacture()->getTypeFacture() == 'Service') {
                $totalVenduDuJour += $prod->getQuantite();
            }
        }

        ///////////////////////////////////////////// TOTAL DES FACTURES EN COURS
        $totalFactureImpayee = 0;
        $factures = $em->getRepository('VentesBundle:Facture')->findAll();
        foreach ($factures as $fact) {
            if ($fact->getEtat() == 'En cours' && $fact->getTypeFacture() == 'Service') {
                $totalFactureImpayee += 1;
            }
        }

        /////////////////////////////////////////////////////////////////////////

        $meilleurProduits = $em->getRepository('VentesBundle:Produit')->findBy(array(), array('totalVendu' => 'desc'));

        return $this->render('VentesBundle:Home:home.html.twig', array(
                    'chart' => $ob,
                    'banqueCaisse' => $ob1,
                    'produits' => $meilleurProduits,
                    'categorieProduit' => $ob3,
                    'creditComptant' => $ob2,
                    'chiffreAffaireAujourdhui' => $chiffreAffaireAujourdhui,
                    'chiffreAffaireAnnee' => $chiffreAffaireAnnee,
                    'totalVenduDuJour' => $totalVenduDuJour,
                    'totalFactureImpayee' => $totalFactureImpayee
        ));
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
