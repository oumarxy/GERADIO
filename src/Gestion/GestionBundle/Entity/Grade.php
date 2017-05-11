<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\GradeRepository")
 */
class Grade
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
     * @ORM\Column(name="libgrade", type="string", length=255)
     */
    private $libgrade;


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
     * Set libgrade
     *
     * @param string $libgrade
     *
     * @return Grade
     */
    public function setLibgrade($libgrade)
    {
        $this->libgrade = $libgrade;

        return $this;
    }

    /**
     * Get libgrade
     *
     * @return string
     */
    public function getLibgrade()
    {
        return $this->libgrade;
    }
	
	public function __toString()
	{
		return $this->getLibgrade();
	}
}
