<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conge
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\CongeRepository")
 */
class Conge
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * Set employe
     *
     * @param \Gestion\GestionBundle\Entity\Employe $employe
     *
     * @return Absence
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
     * Set datedept
     *
     * @param \DateTime $datedept
     * @return Conge
     */
    public function setDatedept($datedept)
    {
        $this->datedept = $datedept;

        return $this;
    }

    /**
     * Get datedept
     *
     * @return \DateTime 
     */
    public function getDatedept()
    {
        return $this->datedept;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     * @return Conge
     */
    public function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime 
     */
    public function getDateretour()
    {
        return $this->dateretour;
    }
}
