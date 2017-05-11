<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sanction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Entity\SanctionRepository")
 */
class Sanction
{
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
     * @ORM\Column(name="libsanction", type="string", length=255)
     */
    private $libsanction;
	
		/**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Employe", cascade={"persist"})
     */
    private $employe;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     */
    private $motif;

    /**
     * @var text
     *
     * @ORM\Column(name="explication", type="text", nullable=true)
     */
    private $explication;

    /**
     * @var Date
     *
     * @ORM\Column(name="datesanction", type="date")
     */
    private $datesanction;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libsanction
     *
     * @param string $libsanction
     * @return Sanction
     */
    public function setLibsanction($libsanction)
    {
        $this->libsanction = $libsanction;

        return $this;
    }

    /**
     * Get libsanction
     *
     * @return string 
     */
    public function getLibsanction()
    {
        return $this->libsanction;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return Sanction
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set explication
     *
     * @param text $explication
     * @return Sanction
     */
    public function setExplication($explication)
    {
        $this->explication = $explication;

        return $this;
    }

    /**
     * Get explication
     *
     * @return text 
     */
    public function getExplication()
    {
        return $this->explication;
    }

  
	/**
     * Set employe
     *
     * @param \Gestion\GestionBundle\Entity\Employe $employe
     *
     * @return Sanction
     */
    public function setEmploye(\Gestion\GestionBundle\Entity\Employe $employe = null)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \Gestion\GestionBundle\Entity\Employe
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    /**
     * Set datesanction
     *
     * @param \DateTime $datesanction
     * @return Sanction
     */
    public function setDatesanction($datesanction)
    {
        $this->datesanction = $datesanction;

        return $this;
    }

    /**
     * Get datesanction
     *
     * @return \DateTime 
     */
    public function getDatesanction()
    {
        return $this->datesanction;
    }
}
