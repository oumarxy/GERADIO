<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directeur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Entity\DirecteurRepository")
 */
class Directeur
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
     * @ORM\Column(name="nom_directeur", type="string", length=255)
     */
    private $nomDirecteur;


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
     * Set nomDirecteur
     *
     * @param string $nomDirecteur
     * @return Directeur
     */
    public function setNomDirecteur($nomDirecteur)
    {
        $this->nomDirecteur = $nomDirecteur;

        return $this;
    }

    /**
     * Get nomDirecteur
     *
     * @return string 
     */
    public function getNomDirecteur()
    {
        return $this->nomDirecteur;
    }
}
