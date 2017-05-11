<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etude
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\EtudeRepository")
 */
class Etude
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
     * @ORM\Column(name="libetude", type="string", length=255)
     */
    private $libetude;


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
     * Set libetude
     *
     * @param string $libetude
     *
     * @return Etude
     */
    public function setLibetude($libetude)
    {
        $this->libetude = $libetude;

        return $this;
    }

    /**
     * Get libetude
     *
     * @return string
     */
    public function getLibetude()
    {
        return $this->libetude;
    }
	
	public function __toString()
	{
		return $this->getLibetude();
	}
}
