<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\FactureRepository")
 */
class Facture {

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
     * @ORM\Column(name="numero", type="string", length=50)
     */
    private $numero;

    /**
     * @var float
     *
     * @ORM\Column(name="reduction", type="float")
     */
    private $reduction;

    /**
     * @var float
     *
     * @ORM\Column(name="totalFacture", type="float")
     */
    private $totalFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="remise", type="float")
     */
    private $remise;

    /**
     * @var float
     *
     * @ORM\Column(name="tvafacture", type="float")
     */
    private $tvafacture;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $typeFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFacture", type="date")
     */
    private $dateFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastupdate", type="datetime")
     */
    private $lastUpdate;

    /**
     * @ORM\OneToMany(targetEntity="Ventes\VentesBundle\Entity\DetailsProduits", mappedBy="facture", cascade={"persist"})
     */
    private $detailsProduits;

    /**
     * @ORM\OneToMany(targetEntity="Ventes\VentesBundle\Entity\Encaissement", mappedBy="facture", cascade={"persist"})
     */
    private $encaissement;

    /**
     * @ORM\ManyToOne(targetEntity="Ventes\VentesBundle\Entity\Client", inversedBy="facture", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="Members\MembersBundle\Entity\AccountMember", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detailsProduits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->encaissement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Facture
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set reduction
     *
     * @param float $reduction
     * @return Facture
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return float 
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set totalFacture
     *
     * @param float $totalFacture
     * @return Facture
     */
    public function setTotalFacture($totalFacture)
    {
        $this->totalFacture = $totalFacture;

        return $this;
    }

    /**
     * Get totalFacture
     *
     * @return float 
     */
    public function getTotalFacture()
    {
        return $this->totalFacture;
    }

    /**
     * Set remise
     *
     * @param float $remise
     * @return Facture
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return float 
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set tvafacture
     *
     * @param float $tvafacture
     * @return Facture
     */
    public function setTvafacture($tvafacture)
    {
        $this->tvafacture = $tvafacture;

        return $this;
    }

    /**
     * Get tvafacture
     *
     * @return float 
     */
    public function getTvafacture()
    {
        return $this->tvafacture;
    }

    /**
     * Set typeFacture
     *
     * @param string $typeFacture
     * @return Facture
     */
    public function setTypeFacture($typeFacture)
    {
        $this->typeFacture = $typeFacture;

        return $this;
    }

    /**
     * Get typeFacture
     *
     * @return string 
     */
    public function getTypeFacture()
    {
        return $this->typeFacture;
    }

    /**
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     * @return Facture
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime 
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Facture
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
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Facture
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
     * Add detailsProduits
     *
     * @param \Ventes\VentesBundle\Entity\DetailsProduits $detailsProduits
     * @return Facture
     */
    public function addDetailsProduit(\Ventes\VentesBundle\Entity\DetailsProduits $detailsProduits)
    {
        $this->detailsProduits[] = $detailsProduits;

        return $this;
    }

    /**
     * Remove detailsProduits
     *
     * @param \Ventes\VentesBundle\Entity\DetailsProduits $detailsProduits
     */
    public function removeDetailsProduit(\Ventes\VentesBundle\Entity\DetailsProduits $detailsProduits)
    {
        $this->detailsProduits->removeElement($detailsProduits);
    }

    /**
     * Get detailsProduits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetailsProduits()
    {
        return $this->detailsProduits;
    }

    /**
     * Add encaissement
     *
     * @param \Ventes\VentesBundle\Entity\Encaissement $encaissement
     * @return Facture
     */
    public function addEncaissement(\Ventes\VentesBundle\Entity\Encaissement $encaissement)
    {
        $this->encaissement[] = $encaissement;

        return $this;
    }

    /**
     * Remove encaissement
     *
     * @param \Ventes\VentesBundle\Entity\Encaissement $encaissement
     */
    public function removeEncaissement(\Ventes\VentesBundle\Entity\Encaissement $encaissement)
    {
        $this->encaissement->removeElement($encaissement);
    }

    /**
     * Get encaissement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEncaissement()
    {
        return $this->encaissement;
    }

    /**
     * Set client
     *
     * @param \Ventes\VentesBundle\Entity\Client $client
     * @return Facture
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

    /**
     * Set utilisateur
     *
     * @param \Members\MembersBundle\Entity\AccountMember $utilisateur
     * @return Facture
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
}
