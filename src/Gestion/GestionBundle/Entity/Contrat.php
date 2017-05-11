<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Contrat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\Column(name="libcontrat", type="string", length=255)
     */
    private $libcontrat;

    /**
     * @var Date
     *
     * @ORM\Column(name="dateentre", type="date")
     */
    private $dateentre;

    /**
     * @var Date
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;

    /**
     * @var String
     *
     * @ORM\Column(name="numcnps", type="string", length=255, nullable=true)
     */
    private $numcnps;

    /**
     * @var Date
     *
     * @ORM\Column(name="datecnps", type="date", nullable=true)
     */
    private $datecnps;
    
	/**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Employe", cascade={"persist"})
     */
    private $employe;
	
	
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    /**
     * @Assert\File()
     */
    private $file;
	

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
     * Set libcontrat
     *
     * @param string $libcontrat
     *
     * @return Contrat
     */
    public function setLibcontrat($libcontrat)
    {
        $this->libcontrat = $libcontrat;

        return $this;
    }

    /**
     * Get libcontrat
     *
     * @return string
     */
    public function getLibcontrat()
    {
        return $this->libcontrat;
    }


    /**
     * Set numcnps
     *
     * @param string $numcnps
     *
     * @return Contrat
     */
    public function setNumcnps($numcnps)
    {
        $this->numcnps = $numcnps;

        return $this;
    }

    /**
     * Get numcnps
     *
     * @return string
     */
    public function getNumcnps()
    {
        return $this->numcnps;
    }


	
	/**
     * Set employe
     *
     * @param \Gestion\GestionBundle\Entity\Employe $employe
     *
     * @return Contrat
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

    /**
     * Set dateentre
     *
     * @param \DateTime $dateentre
     * @return Contrat
     */
    public function setDateentre($dateentre)
    {
        $this->dateentre = $dateentre;

        return $this;
    }

    /**
     * Get dateentre
     *
     * @return \DateTime 
     */
    public function getDateentre()
    {
        return $this->dateentre;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Contrat
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set datecnps
     *
     * @param \DateTime $datecnps
     * @return Contrat
     */
    public function setDatecnps($datecnps)
    {
        $this->datecnps = $datecnps;

        return $this;
    }

    /**
     * Get datecnps
     *
     * @return \DateTime 
     */
    public function getDatecnps()
    {
        return $this->datecnps;
    }
	
	
	 public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/contrats';
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }
        // intervension oumar pour le changeemnt de nom ici
        $this->path = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();


        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to
        // intervension oumar pour affecter le path et non $this->getFile()->getClientOriginalName()
        $this->getFile()->move($this->getUploadRootDir(), $this->path);

        // set the path property to the filename where you've saved the file
        // intervension oumar pour mettre en commentaire ce ancien path
        // $this->path = $this->getFile()->getClientOriginalName();
        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

}
