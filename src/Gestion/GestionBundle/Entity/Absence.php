<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\AbsenceRepository")
 */
class Absence {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Date
     *
     * @ORM\Column(name="datedept", type="date")
     */
    private $datedept;

    /**
     * @var Date
     *
     * @ORM\Column(name="dateretour", type="date")
     */
    private $dateretour;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Employe", cascade={"persist"})
     */
    private $employe;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var text
     *
     * @ORM\Column(name="motif", type="text", nullable=true)
     */
    private $motif;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return Absence
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
     * Set motif
     *
     * @param text $motif
     *
     * @return Absence
     */
    public function setMotif($motif) {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return text
     */
    public function getMotif() {
        return $this->motif;
    }

    /**
     * Set employe
     *
     * @param \Gestion\GestionBundle\Entity\Employe $employe
     *
     * @return Absence
     */
    public function setEmploye(\Gestion\GestionBundle\Entity\Employe $employe = null) {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \Gestion\GestionBundle\Entity\Employe
     */
    public function getEmploye() {
        return $this->employe;
    }

    /**
     * Set datedept
     *
     * @param \DateTime $datedept
     * @return Absence
     */
    public function setDatedept($datedept) {
        $this->datedept = $datedept;

        return $this;
    }

    /**
     * Get datedept
     *
     * @return \DateTime 
     */
    public function getDatedept() {
        return $this->datedept;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     * @return Absence
     */
    public function setDateretour($dateretour) {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime 
     */
    public function getDateretour() {
        return $this->dateretour;
    }

}
