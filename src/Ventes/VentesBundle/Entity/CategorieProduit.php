<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieProduits
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\CategorieProduitRepository")
 */
class CategorieProduit {

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
     * @var \DateTime
     *
     * @ORM\Column(name="lastupdate", type="datetime")
     */
    private $lastUpdate;

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
     * Set libelle
     *
     * @param string $libelle
     * @return CategorieProduit
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

    public function __toString() {
        return $this->getLibelle();
    }

    /**
     * Set utilisateur
     *
     * @param \Members\MembersBundle\Entity\AccountMember $utilisateur
     * @return CategorieProduit
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
     * @return CategorieProduit
     */
    public function setLastUpdate($lastUpdate) {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate() {
        return $this->lastUpdate;
    }


    /**
     * Set prixHT
     *
     * @param float $prixHT
     * @return CategorieProduit
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
}
