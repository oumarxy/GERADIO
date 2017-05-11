<?php

namespace Proxies\__CG__\Ventes\VentesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Operation extends \Ventes\VentesBundle\Entity\Operation implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'id', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'nom', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'libelle', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'dateOperation', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'fonctionpersonres', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'telephone', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'nature', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'flux', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'montant', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'description', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'mois', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'annee', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'lastUpdate', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'dateFormat', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'utilisateur');
        }

        return array('__isInitialized__', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'id', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'nom', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'libelle', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'dateOperation', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'fonctionpersonres', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'telephone', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'nature', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'flux', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'montant', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'description', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'mois', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'annee', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'lastUpdate', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'dateFormat', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Operation' . "\0" . 'utilisateur');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Operation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOperation($dateOperation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOperation', array($dateOperation));

        return parent::setDateOperation($dateOperation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOperation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOperation', array());

        return parent::getDateOperation();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonctionpersonres($fonctionpersonres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonctionpersonres', array($fonctionpersonres));

        return parent::setFonctionpersonres($fonctionpersonres);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonctionpersonres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonctionpersonres', array());

        return parent::getFonctionpersonres();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', array($telephone));

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', array());

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setNature($nature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNature', array($nature));

        return parent::setNature($nature);
    }

    /**
     * {@inheritDoc}
     */
    public function getNature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNature', array());

        return parent::getNature();
    }

    /**
     * {@inheritDoc}
     */
    public function setFlux($flux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFlux', array($flux));

        return parent::setFlux($flux);
    }

    /**
     * {@inheritDoc}
     */
    public function getFlux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlux', array());

        return parent::getFlux();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant($montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', array($montant));

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', array());

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMois($mois)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMois', array($mois));

        return parent::setMois($mois);
    }

    /**
     * {@inheritDoc}
     */
    public function getMois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMois', array());

        return parent::getMois();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnee($annee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnee', array($annee));

        return parent::setAnnee($annee);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnee', array());

        return parent::getAnnee();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastUpdate($lastUpdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastUpdate', array($lastUpdate));

        return parent::setLastUpdate($lastUpdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastUpdate', array());

        return parent::getLastUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFormat($dateFormat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFormat', array($dateFormat));

        return parent::setDateFormat($dateFormat);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFormat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFormat', array());

        return parent::getDateFormat();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(\Members\MembersBundle\Entity\AccountMember $utilisateur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', array($utilisateur));

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', array());

        return parent::getUtilisateur();
    }

}
