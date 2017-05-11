<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fonction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\FonctionRepository")
 */
class Fonction
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
     * @ORM\Column(name="libfonction", type="string", length=255)
     */
    private $libfonction;


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
     * Set libfonction
     *
     * @param string $libfonction
     *
     * @return Fonction
     */
    public function setLibfonction($libfonction)
    {
        $this->libfonction = $libfonction;

        return $this;
    }

    /**
     * Get libfonction
     *
     * @return string
     */
    public function getLibfonction()
    {
        return $this->libfonction;
    }
	
	public function __toString()
	{
		return $this->getLibfonction();
	}
}
