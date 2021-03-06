<?php

namespace Proxies\__CG__\Ventes\VentesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Encaissement extends \Ventes\VentesBundle\Entity\Encaissement implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'id', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'montant', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'date', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'lastUpdate', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'dateFormat', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'mode', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'destination', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'facture', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'mois', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'annee', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'utilisateur');
        }

        return array('__isInitialized__', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'id', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'montant', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'date', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'lastUpdate', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'dateFormat', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'mode', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'destination', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'facture', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'mois', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'annee', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Encaissement' . "\0" . 'utilisateur');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Encaissement $proxy) {
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
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setMode($mode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMode', array($mode));

        return parent::setMode($mode);
    }

    /**
     * {@inheritDoc}
     */
    public function getMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMode', array());

        return parent::getMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestination($destination)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestination', array($destination));

        return parent::setDestination($destination);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestination()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestination', array());

        return parent::getDestination();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacture(\Ventes\VentesBundle\Entity\Facture $facture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacture', array($facture));

        return parent::setFacture($facture);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacture', array());

        return parent::getFacture();
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

}
