<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\OperationRepository")
 */
class Operation {

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateoperation", type="datetime", nullable=true)
     */
    private $dateOperation;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionpersonres", type="string", length=255, nullable=true)
     */
    private $fonctionpersonres;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=255)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="flux", type="string", length=255)
     */
    private $flux;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * Set nom
     *
     * @param string $nom
     * @return Operation
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Operation
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set dateOperation
     *
     * @param \DateTime $dateOperation
     * @return Operation
     */
    public function setDateOperation($dateOperation) {
        $this->dateOperation = $dateOperation;

        return $this;
    }

    /**
     * Get dateOperation
     *
     * @return \DateTime 
     */
    public function getDateOperation() {
        return $this->dateOperation;
    }

    /**
     * Set fonctionpersonres
     *
     * @param string $fonctionpersonres
     * @return Operation
     */
    public function setFonctionpersonres($fonctionpersonres) {
        $this->fonctionpersonres = $fonctionpersonres;

        return $this;
    }

    /**
     * Get fonctionpersonres
     *
     * @return string 
     */
    public function getFonctionpersonres() {
        return $this->fonctionpersonres;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Operation
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set nature
     *
     * @param string $nature
     * @return Operation
     */
    public function setNature($nature) {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Set flux
     *
     * @param string $flux
     * @return Operation
     */
    public function setFlux($flux) {
        $this->flux = $flux;

        return $this;
    }

    /**
     * Get flux
     *
     * @return string 
     */
    public function getFlux() {
        return $this->flux;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Operation
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
     * Set description
     *
     * @param string $description
     * @return Operation
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set mois
     *
     * @param integer $mois
     * @return Operation
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return integer 
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Operation
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Operation
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
     * Set dateFormat
     *
     * @param \DateTime $dateFormat
     * @return Operation
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * Get dateFormat
     *
     * @return \DateTime 
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * Set utilisateur
     *
     * @param \Members\MembersBundle\Entity\AccountMember $utilisateur
     * @return Operation
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
