<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Entity\MissionRepository")
 */
class Mission
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
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="mission", type="string", length=255)
     */
    private $mission;

    /**
     * @var text
     *
     * @ORM\Column(name="motif", type="text", nullable=true)
     */
    private $description;
    
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
     * Set destination
     *
     * @param string $destination
     *
     * @return Mission
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set mission
     *
     * @param string $mission
     *
     * @return Mission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
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
     * @return Mission
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
     * @return Mission
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

    /**
     * Set description
     *
     * @param string $description
     * @return Mission
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
