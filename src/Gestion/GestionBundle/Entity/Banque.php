<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\BanqueRepository")
 */
class Banque
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
     * @ORM\Column(name="libbanque", type="string", length=255)
     */
    private $libbanque;

	
     /**
     * @var Date
     *
     * @ORM\Column(name="dated", type="date")
     */
    private $dated;
    
     /**
     * @var Date
     *
     * @ORM\Column(name="datef", type="date")
     */
    private $datef;
	
    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Employe", cascade={"persist"})
     */
    private $employe;
    
    /**
     * @var array
     *
     * @ORM\Column(name="salairecompoTable", type="array", nullable=true)
     */
    private $salairecompoTable;
    

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
     * Set libbanque
     *
     * @param string $libbanque
     * @return Banque
     */
    public function setLibbanque($libbanque)
    {
        $this->libbanque = $libbanque;

        return $this;
    }

    /**
     * Get libbanque
     *
     * @return string 
     */
    public function getLibbanque()
    {
        return $this->libbanque;
    }
    
    /**
     * Set dated
     *
     * @param \DateTime $dated
     * @return Banque
     */
    public function setDated($dated)
    {
        $this->dated = $dated;

        return $this;
    }

    /**
     * Get dated
     *
     * @return \DateTime 
     */
    public function getDated()
    {
        return $this->dated;
    }

    /**
     * Set datef
     *
     * @param \DateTime $datef
     * @return Banque
     */
    public function setDatef($datef)
    {
        $this->datef = $datef;

        return $this;
    }

    /**
     * Get datef
     *
     * @return \DateTime 
     */
    public function getDatef()
    {
        return $this->datef;
    }

    /**
     * Set salairecompoTable
     *
     * @param array $salairecompoTable
     * @return Banque
     */
    public function setSalairecompoTable($salairecompoTable)
    {
        $this->salairecompoTable = $salairecompoTable;

        return $this;
    }

    /**
     * Get salairecompoTable
     *
     * @return array 
     */
    public function getSalairecompoTable()
    {
        return $this->salairecompoTable;
    }

    /**
     * Set employe
     *
     * @param \Gestion\GestionBundle\Entity\Employe $employe
     * @return Banque
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
}
