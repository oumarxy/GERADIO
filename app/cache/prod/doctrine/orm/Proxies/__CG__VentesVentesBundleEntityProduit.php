<?php

namespace Proxies\__CG__\Ventes\VentesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produit extends \Ventes\VentesBundle\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'refProd', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'libelle', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'lastUpdate', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'etat', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'categorieProduit', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'client', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'utilisateur', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'totalVendu');
        }

        return array('__isInitialized__', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'refProd', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'libelle', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'lastUpdate', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'etat', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'categorieProduit', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'client', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'utilisateur', '' . "\0" . 'Ventes\\VentesBundle\\Entity\\Produit' . "\0" . 'totalVendu');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produit $proxy) {
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
    public function setRefProd($refProd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefProd', array($refProd));

        return parent::setRefProd($refProd);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefProd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefProd', array());

        return parent::getRefProd();
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
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalVendu($totalVendu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalVendu', array($totalVendu));

        return parent::setTotalVendu($totalVendu);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalVendu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalVendu', array());

        return parent::getTotalVendu();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorieProduit(\Ventes\VentesBundle\Entity\CategorieProduit $categorieProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorieProduit', array($categorieProduit));

        return parent::setCategorieProduit($categorieProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorieProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorieProduit', array());

        return parent::getCategorieProduit();
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
    public function setClient(\Ventes\VentesBundle\Entity\Client $client)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', array($client));

        return parent::setClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', array());

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
