<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Employe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Repository\EmployeRepository")
 */
class Employe {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Fonction", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $fonction;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Service", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $service;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Etude", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $etude;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\GestionBundle\Entity\Grade", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="nomemp", type="string", length=255)
     */
    private $nomemp;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomemp", type="string", length=255)
     */
    private $prenomemp;

    /**
     * @var string
     *
     * @ORM\Column(name="matemp", type="string", length=255)
     */
    private $matemp;

    /**
     * @var string
     *
     * @ORM\Column(name="genremp", type="string", length=255)
     */
    private $genremp;

    /**
     * @var string
     *
     * @ORM\Column(name="natemp", type="string", length=255)
     */
    private $natemp;

    /**
     * @var Date
     *
     * @ORM\Column(name="dobemp", type="date")
     */
    private $dobemp;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuemp", type="string", length=255)
     */
    private $lieuemp;

    /**
     * @var string
     *
     * @ORM\Column(name="civilitemp", type="string", length=255)
     */
    private $civilitemp;

    /**
     * @var string
     *
     * @ORM\Column(name="statuemp", type="string", length=255)
     */
    private $statuemp;

    /**
     * @var string
     *
     * @ORM\Column(name="adressemp", type="string", length=255, nullable=true)
     */
    private $adressemp;

    /**
     * @var float
     *
     * @ORM\Column(name="nbreftemp", type="float", length=255)
     */
    private $nbreftemp;

    /**
     * @var string
     *
     * @ORM\Column(name="telemp", type="string", length=255, nullable=true)
     */
    private $telemp;

    /**
     * @var string
     *
     * @ORM\Column(name="celemp", type="string", length=255, nullable=true)
     */
    private $celemp;

    /**
     * @var string
     *
     * @ORM\Column(name="emailemp", type="string", length=255, nullable=true)
     */
    private $emailemp;

    /**
     * @var string
     *
     * @ORM\Column(name="perscont", type="string", length=255, nullable=true)
     */
    private $perscont;

    /**
     * @var string
     *
     * @ORM\Column(name="telpers", type="string", length=255, nullable=true)
     */
    private $telpers;

    /**
     * @var string
     *
     * @ORM\Column(name="celpers", type="string", length=255, nullable=true)
     */
    private $celpers;

    /**
     * @var string
     *
     * @ORM\Column(name="filiationemp", type="string", length=255, nullable=true)
     */
    private $filiationemp;

    /**
     * @var float
     *
     * @ORM\Column(name="salbase", type="float")
     */
    private $salbase;

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
    public function getId() {
        return $this->id;
    }

    /**
     * Set nomemp
     *
     * @param string $nomemp
     *
     * @return Employe
     */
    public function setNomemp($nomemp) {
        $this->nomemp = $nomemp;

        return $this;
    }

    /**
     * Get nomemp
     *
     * @return string
     */
    public function getNomemp() {
        return $this->nomemp;
    }

    /**
     * Set prenomemp
     *
     * @param string $prenomemp
     *
     * @return Employe
     */
    public function setPrenomemp($prenomemp) {
        $this->prenomemp = $prenomemp;

        return $this;
    }

    /**
     * Get prenomemp
     *
     * @return string
     */
    public function getPrenomemp() {
        return $this->prenomemp;
    }

    /**
     * Set matemp
     *
     * @param string $matemp
     *
     * @return Employe
     */
    public function setMatemp($matemp) {
        $this->matemp = $matemp;

        return $this;
    }

    /**
     * Get matemp
     *
     * @return string
     */
    public function getMatemp() {
        return $this->matemp;
    }

    /**
     * Set genremp
     *
     * @param string $genremp
     *
     * @return Employe
     */
    public function setGenremp($genremp) {
        $this->genremp = $genremp;

        return $this;
    }

    /**
     * Get genremp
     *
     * @return string
     */
    public function getGenremp() {
        return $this->genremp;
    }

    /**
     * Set natemp
     *
     * @param string $natemp
     *
     * @return Employe
     */
    public function setNatemp($natemp) {
        $this->natemp = $natemp;

        return $this;
    }

    /**
     * Get natemp
     *
     * @return string
     */
    public function getNatemp() {
        return $this->natemp;
    }

    /**
     * Set dobemp
     *
     * @param string $dobemp
     *
     * @return Employe
     */
    public function setDobemp($dobemp) {
        $this->dobemp = $dobemp;

        return $this;
    }

    /**
     * Get dobemp
     *
     * @return string
     */
    public function getDobemp() {
        return $this->dobemp;
    }

    /**
     * Set lieuemp
     *
     * @param string $lieuemp
     *
     * @return Employe
     */
    public function setLieuemp($lieuemp) {
        $this->lieuemp = $lieuemp;

        return $this;
    }

    /**
     * Get lieuemp
     *
     * @return string
     */
    public function getLieuemp() {
        return $this->lieuemp;
    }

    /**
     * Set civilitemp
     *
     * @param string $civilitemp
     *
     * @return Employe
     */
    public function setCivilitemp($civilitemp) {
        $this->civilitemp = $civilitemp;

        return $this;
    }

    /**
     * Get civilitemp
     *
     * @return string
     */
    public function getCivilitemp() {
        return $this->civilitemp;
    }

    /**
     * Set statuemp
     *
     * @param string $statuemp
     *
     * @return Employe
     */
    public function setStatuemp($statuemp) {
        $this->statuemp = $statuemp;

        return $this;
    }

    /**
     * Get statuemp
     *
     * @return string
     */
    public function getStatuemp() {
        return $this->statuemp;
    }

    /**
     * Set adressemp
     *
     * @param string $adressemp
     *
     * @return Employe
     */
    public function setAdressemp($adressemp) {
        $this->adressemp = $adressemp;

        return $this;
    }

    /**
     * Get adressemp
     *
     * @return string
     */
    public function getAdressemp() {
        return $this->adressemp;
    }

    /**
     * Set nbreftemp
     *
     * @param float $nbreftemp
     *
     * @return Employe
     */
    public function setNbreftemp($nbreftemp) {
        $this->nbreftemp = $nbreftemp;

        return $this;
    }

    /**
     * Get nbreftemp
     *
     * @return float
     */
    public function getNbreftemp() {
        return $this->nbreftemp;
    }

    /**
     * Set telemp
     *
     * @param string $telemp
     *
     * @return Employe
     */
    public function setTelemp($telemp) {
        $this->telemp = $telemp;

        return $this;
    }

    /**
     * Get telemp
     *
     * @return string
     */
    public function getTelemp() {
        return $this->telemp;
    }

    /**
     * Set celemp
     *
     * @param string $celemp
     *
     * @return Employe
     */
    public function setCelemp($celemp) {
        $this->celemp = $celemp;

        return $this;
    }

    /**
     * Get celemp
     *
     * @return string
     */
    public function getCelemp() {
        return $this->celemp;
    }

    /**
     * Set emailemp
     *
     * @param string $emailemp
     *
     * @return Employe
     */
    public function setEmailemp($emailemp) {
        $this->emailemp = $emailemp;

        return $this;
    }

    /**
     * Get emailemp
     *
     * @return string
     */
    public function getEmailemp() {
        return $this->emailemp;
    }

    /**
     * Set perscont
     *
     * @param string $perscont
     *
     * @return Employe
     */
    public function setPerscont($perscont) {
        $this->perscont = $perscont;

        return $this;
    }

    /**
     * Get perscont
     *
     * @return string
     */
    public function getPerscont() {
        return $this->perscont;
    }

    /**
     * Set telpers
     *
     * @param string $telpers
     *
     * @return Employe
     */
    public function setTelpers($telpers) {
        $this->telpers = $telpers;

        return $this;
    }

    /**
     * Get telpers
     *
     * @return string
     */
    public function getTelpers() {
        return $this->telpers;
    }

    /**
     * Set celpers
     *
     * @param string $celpers
     *
     * @return Employe
     */
    public function setCelpers($celpers) {
        $this->celpers = $celpers;

        return $this;
    }

    /**
     * Get celpers
     *
     * @return string
     */
    public function getCelpers() {
        return $this->celpers;
    }

    /**
     * Set filiationemp
     *
     * @param string $filiationemp
     *
     * @return Employe
     */
    public function setFiliationemp($filiationemp) {
        $this->filiationemp = $filiationemp;

        return $this;
    }

    /**
     * Get filiationemp
     *
     * @return string
     */
    public function getFiliationemp() {
        return $this->filiationemp;
    }

    public function __toString() {
        return $this->getNomemp();
    }

    /**
     * Set fonction
     *
     * @param \Gestion\GestionBundle\Entity\Fonction $fonction
     *
     * @return Employe
     */
    public function setFonction(\Gestion\GestionBundle\Entity\Fonction $fonction = null) {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return \Gestion\GestionBundle\Entity\Fonction
     */
    public function getFonction() {
        return $this->fonction;
    }

    /**
     * Set etude
     *
     * @param \Gestion\GestionBundle\Entity\Etude $etude
     *
     * @return Employe
     */
    public function setEtude(\Gestion\GestionBundle\Entity\Etude $etude = null) {
        $this->etude = $etude;

        return $this;
    }

    /**
     * Get etude
     *
     * @return \Gestion\GestionBundle\Entity\Etude
     */
    public function getEtude() {
        return $this->etude;
    }

    /**
     * Set service
     *
     * @param \Gestion\GestionBundle\Entity\Service $service
     *
     * @return Employe
     */
    public function setService(\Gestion\GestionBundle\Entity\Service $service = null) {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Gestion\GestionBundle\Entity\Service
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Set grade
     *
     * @param \Gestion\GestionBundle\Entity\Grade $grade
     *
     * @return Employe
     */
    public function setGrade(\Gestion\GestionBundle\Entity\Grade $grade = null) {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return \Gestion\GestionBundle\Entity\Grade
     */
    public function getGrade() {
        return $this->grade;
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
        return 'uploads/profiles';
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

    /**
     * Set path
     *
     * @param string $path
     * @return Employe
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath() {
        return $this->path;
    }


    /**
     * Set salbase
     *
     * @param float $salbase
     * @return Employe
     */
    public function setSalbase($salbase)
    {
        $this->salbase = $salbase;

        return $this;
    }

    /**
     * Get salbase
     *
     * @return float 
     */
    public function getSalbase()
    {
        return $this->salbase;
    }
}
