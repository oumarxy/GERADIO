<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encaissement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\EncaissementRepository")
 */
class Encaissement {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastupdate", type="datetime")
     */
    private $lastUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFormat", type="date")
     */
    private $dateFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=30)
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=30)
     */
    private $destination;

    /**
     * @ORM\ManyToOne(targetEntity="Ventes\VentesBundle\Entity\Facture", inversedBy="encaissement", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $facture;

    /**
     * @var integer
     *
     * @ORM\Column(name="mois", type="integer")
     */
    private $mois;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

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
     * Set montant
     *
     * @param float $montant
     * @return Encaissement
     */
    public function setMontant($montant) {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Encaissement
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set mode
     *
     * @param string $mode
     * @return Encaissement
     */
    public function setMode($mode) {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string 
     */
    public function getMode() {
        return $this->mode;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Encaissement
     */
    public function setDestination($destination) {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination() {
        return $this->destination;
    }

    /**
     * Set facture
     *
     * @param \Ventes\VentesBundle\Entity\Facture $facture
     * @return Encaissement
     */
    public function setFacture(\Ventes\VentesBundle\Entity\Facture $facture) {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \Ventes\VentesBundle\Entity\Facture 
     */
    public function getFacture() {
        return $this->facture;
    }

    public function __toString() {
        return $this->getDestination();
    }

    /**
     * Set mois
     *
     * @param integer $mois
     * @return Encaissement
     */
    public function setMois($mois) {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return integer 
     */
    public function getMois() {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Encaissement
     */
    public function setAnnee($annee) {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Set dateFormat
     *
     * @param \DateTime $dateFormat
     * @return Encaissement
     */
    public function setDateFormat($dateFormat) {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * Get dateFormat
     *
     * @return \DateTime 
     */
    public function getDateFormat() {
        return $this->dateFormat;
    }

    /**
     * Set utilisateur
     *
     * @param \Members\MembersBundle\Entity\AccountMember $utilisateur
     * @return Encaissement
     */
    public function setUtilisateur(\Members\MembersBundle\Entity\AccountMember $utilisateur = null) {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Members\MembersBundle\Entity\AccountMember 
     */
    public function getUtilisateur() {
        return $this->utilisateur;
    }


    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Encaissement
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
}
