<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * salairecompo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\salairecompoRepository")
 */
class salairecompo
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
     * @ORM\Column(name="composante", type="string", length=255, nullable=true)
     */
    private $composante;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="taux", type="float")
     */
    private $taux;

    /**
     * @var Float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;


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
     * Set composante
     *
     * @param string $composante
     *
     * @return salairecompo
     */
    public function setComposante($composante)
    {
        $this->composante = $composante;

        return $this;
    }

    /**
     * Get composante
     *
     * @return string
     */
    public function getComposante()
    {
        return $this->composante;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return salairecompo
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set taux
     *
     * @param float $taux
     *
     * @return salairecompo
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return float
     */
    public function getTaux()
    {
        return $this->taux;
    }



    /**
     * Set montant
     *
     * @param float $montant
     * @return salairecompo
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }
}
