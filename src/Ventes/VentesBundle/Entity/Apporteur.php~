<?php

namespace Ventes\VentesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apporteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ventes\VentesBundle\Repository\ApporteurRepository")
 */
class Apporteur
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
     * @ORM\Column(name="nomapporteur", type="string", length=255)
     */
    private $nomapporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomapporteur", type="string", length=255)
     */
    private $prenomapporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;


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
     * Set nomapporteur
     *
     * @param string $nomapporteur
     *
     * @return Apporteur
     */
    public function setNomapporteur($nomapporteur)
    {
        $this->nomapporteur = $nomapporteur;

        return $this;
    }

    /**
     * Get nomapporteur
     *
     * @return string
     */
    public function getNomapporteur()
    {
        return $this->nomapporteur;
    }

    /**
     * Set prenomapporteur
     *
     * @param string $prenomapporteur
     *
     * @return Apporteur
     */
    public function setPrenomapporteur($prenomapporteur)
    {
        $this->prenomapporteur = $prenomapporteur;

        return $this;
    }

    /**
     * Get prenomapporteur
     *
     * @return string
     */
    public function getPrenomapporteur()
    {
        return $this->prenomapporteur;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Apporteur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Apporteur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Apporteur
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }
	
	public function __toString()
	{
		return $this->getNomapporteur();
	}


}
