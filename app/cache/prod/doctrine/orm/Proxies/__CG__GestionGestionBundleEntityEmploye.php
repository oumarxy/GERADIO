<?php

namespace Proxies\__CG__\Gestion\GestionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Employe extends \Gestion\GestionBundle\Entity\Employe implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array('path' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->path);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'id', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'fonction', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'service', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'etude', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'grade', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'nomemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'prenomemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'matemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'genremp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'natemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'dobemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'lieuemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'civilitemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'statuemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'adressemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'nbreftemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'telemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'celemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'emailemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'perscont', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'telpers', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'celpers', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'filiationemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'salbase', 'path', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'file');
        }

        return array('__isInitialized__', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'id', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'fonction', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'service', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'etude', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'grade', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'nomemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'prenomemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'matemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'genremp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'natemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'dobemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'lieuemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'civilitemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'statuemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'adressemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'nbreftemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'telemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'celemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'emailemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'perscont', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'telpers', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'celpers', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'filiationemp', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'salbase', '' . "\0" . 'Gestion\\GestionBundle\\Entity\\Employe' . "\0" . 'file');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Employe $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->path);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomemp($nomemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomemp', array($nomemp));

        return parent::setNomemp($nomemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomemp', array());

        return parent::getNomemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomemp($prenomemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomemp', array($prenomemp));

        return parent::setPrenomemp($prenomemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomemp', array());

        return parent::getPrenomemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatemp($matemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatemp', array($matemp));

        return parent::setMatemp($matemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatemp', array());

        return parent::getMatemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenremp($genremp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenremp', array($genremp));

        return parent::setGenremp($genremp);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenremp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenremp', array());

        return parent::getGenremp();
    }

    /**
     * {@inheritDoc}
     */
    public function setNatemp($natemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNatemp', array($natemp));

        return parent::setNatemp($natemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getNatemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNatemp', array());

        return parent::getNatemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDobemp($dobemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDobemp', array($dobemp));

        return parent::setDobemp($dobemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDobemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDobemp', array());

        return parent::getDobemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuemp($lieuemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuemp', array($lieuemp));

        return parent::setLieuemp($lieuemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuemp', array());

        return parent::getLieuemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilitemp($civilitemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilitemp', array($civilitemp));

        return parent::setCivilitemp($civilitemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilitemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilitemp', array());

        return parent::getCivilitemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatuemp($statuemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatuemp', array($statuemp));

        return parent::setStatuemp($statuemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatuemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatuemp', array());

        return parent::getStatuemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdressemp($adressemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdressemp', array($adressemp));

        return parent::setAdressemp($adressemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdressemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdressemp', array());

        return parent::getAdressemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreftemp($nbreftemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreftemp', array($nbreftemp));

        return parent::setNbreftemp($nbreftemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreftemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreftemp', array());

        return parent::getNbreftemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelemp($telemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelemp', array($telemp));

        return parent::setTelemp($telemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelemp', array());

        return parent::getTelemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCelemp($celemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCelemp', array($celemp));

        return parent::setCelemp($celemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCelemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCelemp', array());

        return parent::getCelemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailemp($emailemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailemp', array($emailemp));

        return parent::setEmailemp($emailemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailemp', array());

        return parent::getEmailemp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPerscont($perscont)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPerscont', array($perscont));

        return parent::setPerscont($perscont);
    }

    /**
     * {@inheritDoc}
     */
    public function getPerscont()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerscont', array());

        return parent::getPerscont();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelpers($telpers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelpers', array($telpers));

        return parent::setTelpers($telpers);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelpers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelpers', array());

        return parent::getTelpers();
    }

    /**
     * {@inheritDoc}
     */
    public function setCelpers($celpers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCelpers', array($celpers));

        return parent::setCelpers($celpers);
    }

    /**
     * {@inheritDoc}
     */
    public function getCelpers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCelpers', array());

        return parent::getCelpers();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiliationemp($filiationemp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiliationemp', array($filiationemp));

        return parent::setFiliationemp($filiationemp);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiliationemp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiliationemp', array());

        return parent::getFiliationemp();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonction(\Gestion\GestionBundle\Entity\Fonction $fonction = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonction', array($fonction));

        return parent::setFonction($fonction);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonction', array());

        return parent::getFonction();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtude(\Gestion\GestionBundle\Entity\Etude $etude = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtude', array($etude));

        return parent::setEtude($etude);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtude', array());

        return parent::getEtude();
    }

    /**
     * {@inheritDoc}
     */
    public function setService(\Gestion\GestionBundle\Entity\Service $service = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setService', array($service));

        return parent::setService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function getService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getService', array());

        return parent::getService();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrade(\Gestion\GestionBundle\Entity\Grade $grade = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrade', array($grade));

        return parent::setGrade($grade);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrade', array());

        return parent::getGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', array());

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', array());

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', array($file));

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', array());

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array());

        return parent::upload();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($path));

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalbase($salbase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalbase', array($salbase));

        return parent::setSalbase($salbase);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalbase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalbase', array());

        return parent::getSalbase();
    }

}
