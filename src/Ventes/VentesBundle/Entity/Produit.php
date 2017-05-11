<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\ProduitRepository")
 */
class Produit {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * @var \DateTime
     *
     * @ORM\Column(name="lastupdate", type="datetime")
     */
    private $lastUpdate;
    
    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Ventes\VentesBundle\Entity\CategorieProduit", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorieProduit;
    
     /**
     * @ORM\ManyToOne(targetEntity="Ventes\VentesBundle\Entity\Client", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="Members\MembersBundle\Entity\AccountMember", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalVendu", type="integer", nullable=true)
     */
    private $totalVendu;

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
     * @return Produit
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
     * @return Produit
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
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Produit
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Produit
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set totalVendu
     *
     * @param integer $totalVendu
     * @return Produit
     */
    public function setTotalVendu($totalVendu)
    {
        $this->totalVendu = $totalVendu;

        return $this;
    }

    /**
     * Get totalVendu
     *
     * @return integer 
     */
    public function getTotalVendu()
    {
        return $this->totalVendu;
    }

    /**
     * Set categorieProduit
     *
     * @param \Ventes\VentesBundle\Entity\CategorieProduit $categorieProduit
     * @return Produit
     */
    public function setCategorieProduit(\Ventes\VentesBundle\Entity\CategorieProduit $categorieProduit)
    {
        $this->categorieProduit = $categorieProduit;

        return $this;
    }

    /**
     * Get categorieProduit
     *
     * @return \Ventes\VentesBundle\Entity\CategorieProduit 
     */
    public function getCategorieProduit()
    {
        return $this->categorieProduit;
    }

    /**
     * Set utilisateur
     *
     * @param \Members\MembersBundle\Entity\AccountMember $utilisateur
     * @return Produit
     */
    public function setUtilisateur(\Members\MembersBundle\Entity\AccountMember $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Members\MembersBundle\Entity\AccountMember 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set client
     *
     * @param \Ventes\VentesBundle\Entity\Client $client
     * @return Produit
     */
    public function setClient(\Ventes\VentesBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Ventes\VentesBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
    public function __toString() {
        return $this->getLibelle();
    }
}
