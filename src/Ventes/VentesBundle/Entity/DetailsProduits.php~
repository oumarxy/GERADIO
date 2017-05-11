<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailsProduits
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\DetailsProduitsRepository")
 */
class DetailsProduits {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCategoriePoduit", type="integer")
     */
    private $idCategoriePoduit;
    
     /**
     * @var string
     *
     * @ORM\Column(name="refProd", type="string", length=10)
     */
    private $refProd;
    
      /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;



    /**
     * @var float
     *
     * @ORM\Column(name="prixHT", type="float")
     */
    private $prixHT;


    /**
     * @var float
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

     /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;
    
    /**
     * @ORM\ManyToOne(targetEntity="Ventes\VentesBundle\Entity\Facture", inversedBy="detailsProduits", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $facture;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }
   

    

    /**
     * Set refProd
     *
     * @param string $refProd
     * @return DetailsProduits
     */
    public function setRefProd($refProd)
    {
        $this->refProd = $refProd;

        return $this;
    }

    /**
     * Get refProd
     *
     * @return string 
     */
    public function getRefProd()
    {
        return $this->refProd;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return DetailsProduits
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set prixHT
     *
     * @param float $prixHT
     * @return DetailsProduits
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    /**
     * Get prixHT
     *
     * @return float 
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return DetailsProduits
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set facture
     *
     * @param \Ventes\VentesBundle\Entity\Facture $facture
     * @return DetailsProduits
     */
    public function setFacture(\Ventes\VentesBundle\Entity\Facture $facture)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \Ventes\VentesBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }
    
     public function __toString() {
        return $this->getLibelle();
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return DetailsProduits
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return DetailsProduits
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     * @return DetailsProduits
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idCategorieProduit
     *
     * @param integer $idCategorieProduit
     * @return DetailsProduits
     */
    public function setIdCategorieProduit($idCategorieProduit)
    {
        $this->idCategorieProduit = $idCategorieProduit;

        return $this;
    }

    /**
     * Get idCategorieProduit
     *
     * @return integer 
     */
    public function getIdCategorieProduit()
    {
        return $this->idCategorieProduit;
    }


    /**
     * Set idCategoriePoduit
     *
     * @param integer $idCategoriePoduit
     * @return DetailsProduits
     */
    public function setIdCategoriePoduit($idCategoriePoduit)
    {
        $this->idCategoriePoduit = $idCategoriePoduit;

        return $this;
    }

    /**
     * Get idCategoriePoduit
     *
     * @return integer 
     */
    public function getIdCategoriePoduit()
    {
        return $this->idCategoriePoduit;
    }


}
