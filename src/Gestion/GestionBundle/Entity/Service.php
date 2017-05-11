<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="libservice", type="string", length=255)
     */
    private $libservice;


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
     * Set libservice
     *
     * @param string $libservice
     *
     * @return Service
     */
    public function setLibservice($libservice)
    {
        $this->libservice = $libservice;

        return $this;
    }

    /**
     * Get libservice
     *
     * @return string
     */
    public function getLibservice()
    {
        return $this->libservice;
    }
	
	public function __toString()
	{
		return $this->getLibservice();
	}
}
