<?php

namespace Gestion\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Cvupload
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\GestionBundle\Entity\CvuploadRepository")
 */
class Cvupload {

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
     * @ORM\Column(name="libellecv", type="string", length=255)
     */
    private $libellecv;

    /**
     * @var Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

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
     * @Assert\File(
     *     mimeTypes = {"application/pdf", "application/x-pdf"},
     *     mimeTypesMessage = "Le CV doit être au format PDF"
     * )
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
     * Set employe
     *
     * @param \Gestion\GestionBundle\Entity\Employe $employe
     *
     * @return Absence
     */
    public function setEmploye(\Gestion\GestionBundle\Entity\Employe $employe = null) {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return \Gestion\GestionBundle\Entity\Employe
     */
    public function getEmploye() {
        return $this->employe;
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
        return 'uploads/documents';
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
     * Set libellecv
     *
     * @param string $libellecv
     * @return Cvupload
     */
    public function setLibellecv($libellecv) {
        $this->libellecv = $libellecv;

        return $this;
    }

    /**
     * Get libellecv
     *
     * @return string 
     */
    public function getLibellecv() {
        return $this->libellecv;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Cvupload
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Cvupload
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

}
