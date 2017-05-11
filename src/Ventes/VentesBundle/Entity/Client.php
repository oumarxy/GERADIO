<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\CLientRepository")
 */
class Client {

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
     * @ORM\Column(name="numero", type="string", length=255, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=true)
     */
    private $activite;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastupdate", type="datetime", nullable=true)
     */
    private $lastUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="personneressource", type="string", length=255, nullable=true)
     */
    private $personneressource;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionpersonres", type="string", length=255, nullable=true)
     */
    private $fonctionpersonres;

    /**
     * @var string
     *
     * @ORM\Column(name="telpersres", type="string", length=255, nullable=true)
     */
    private $telpersres;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=255, nullable=true)
     */
    private $siteweb;


    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity="Ventes\VentesBundle\Entity\Facture", mappedBy="client" ,cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $facture;

    /**
     * @ORM\ManyToOne(targetEntity="Ventes\VentesBundle\Entity\CategorieClient", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Members\MembersBundle\Entity\AccountMember", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Ventes\VentesBundle\Entity\Apporteur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $apporteur;

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
        $this->facture = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Client
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
     * Set activite
     *
     * @param string $activite
     * @return Client
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string 
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Client
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
     * Set adresse
     *
     * @param string $adresse
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set personneressource
     *
     * @param string $personneressource
     * @return Client
     */
    public function setPersonneressource($personneressource)
    {
        $this->personneressource = $personneressource;

        return $this;
    }

    /**
     * Get personneressource
     *
     * @return string 
     */
    public function getPersonneressource()
    {
        return $this->personneressource;
    }

    /**
     * Set fonctionpersonres
     *
     * @param string $fonctionpersonres
     * @return Client
     */
    public function setFonctionpersonres($fonctionpersonres)
    {
        $this->fonctionpersonres = $fonctionpersonres;

        return $this;
    }

    /**
     * Get fonctionpersonres
     *
     * @return string 
     */
    public function getFonctionpersonres()
    {
        return $this->fonctionpersonres;
    }

    /**
     * Set telpersres
     *
     * @param string $telpersres
     * @return Client
     */
    public function setTelpersres($telpersres)
    {
        $this->telpersres = $telpersres;

        return $this;
    }

    /**
     * Get telpersres
     *
     * @return string 
     */
    public function getTelpersres()
    {
        return $this->telpersres;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Client
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Client
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Add facture
     *
     * @param \Ventes\VentesBundle\Entity\Facture $facture
     * @return Client
     */
    public function addFacture(\Ventes\VentesBundle\Entity\Facture $facture)
    {
        $this->facture[] = $facture;

        return $this;
    }

    /**
     * Remove facture
     *
     * @param \Ventes\VentesBundle\Entity\Facture $facture
     */
    public function removeFacture(\Ventes\VentesBundle\Entity\Facture $facture)
    {
        $this->facture->removeElement($facture);
    }

    /**
     * Get facture
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set categorie
     *
     * @param \Ventes\VentesBundle\Entity\CategorieClient $categorie
     * @return Client
     */
    public function setCategorie(\Ventes\VentesBundle\Entity\CategorieClient $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Ventes\VentesBundle\Entity\CategorieClient 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set utilisateur
     *
     * @param \Members\MembersBundle\Entity\AccountMember $utilisateur
     * @return Client
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
     * Set apporteur
     *
     * @param \Ventes\VentesBundle\Entity\Apporteur $apporteur
     * @return Client
     */
    public function setApporteur(\Ventes\VentesBundle\Entity\Apporteur $apporteur = null)
    {
        $this->apporteur = $apporteur;

        return $this;
    }

    /**
     * Get apporteur
     *
     * @return \Ventes\VentesBundle\Entity\Apporteur 
     */
    public function getApporteur()
    {
        return $this->apporteur;
    }
    public function __toString() {
        return $this->getNom();
    }
}
