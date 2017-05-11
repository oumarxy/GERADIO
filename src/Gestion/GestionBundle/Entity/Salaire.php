<?php
namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salaire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Salaire
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
     * @ORM\Column(name="periode", type="string", length=255)
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="salairenet", type="string", length=255)
     */
    private $salairenet;

    /**
     * @var string
     *
     * @ORM\Column(name="totalgain", type="string", length=255)
     */
    private $totalgain;

    /**
     * @var string
     *
     * @ORM\Column(name="totalretenue", type="string", length=255)
     */
    private $totalretenue;


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
     * Set periode
     *
     * @param string $periode
     * @return Salaire
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set salairenet
     *
     * @param string $salairenet
     * @return Salaire
     */
    public function setSalairenet($salairenet)
    {
        $this->salairenet = $salairenet;

        return $this;
    }

    /**
     * Get salairenet
     *
     * @return string 
     */
    public function getSalairenet()
    {
        return $this->salairenet;
    }

    /**
     * Set totalgain
     *
     * @param string $totalgain
     * @return Salaire
     */
    public function setTotalgain($totalgain)
    {
        $this->totalgain = $totalgain;

        return $this;
    }

    /**
     * Get totalgain
     *
     * @return string 
     */
    public function getTotalgain()
    {
        return $this->totalgain;
    }

    /**
     * Set totalretenue
     *
     * @param string $totalretenue
     * @return Salaire
     */
    public function setTotalretenue($totalretenue)
    {
        $this->totalretenue = $totalretenue;

        return $this;
    }

    /**
     * Get totalretenue
     *
     * @return string 
     */
    public function getTotalretenue()
    {
        return $this->totalretenue;
    }
}
