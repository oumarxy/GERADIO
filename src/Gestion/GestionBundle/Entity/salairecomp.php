<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * salairecomp
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Entity\salairecompRepository")
 */
class salairecomp
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
     * @ORM\Column(name="composante", type="string", length=255)
     */
    private $composante;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="taux", type="string", length=255)
     */
    private $taux;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255)
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
     * @return salairecomp
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
     * @return salairecomp
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
     * @param string $taux
     *
     * @return salairecomp
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return string
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set montant
     *
     * @param string $montant
     *
     * @return salairecomp
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }
}
