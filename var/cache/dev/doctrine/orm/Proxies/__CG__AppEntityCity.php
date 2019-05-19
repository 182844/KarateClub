<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class City extends \App\Entity\City implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\City' . "\0" . 'id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'zip', '' . "\0" . 'App\\Entity\\City' . "\0" . 'cityName', '' . "\0" . 'App\\Entity\\City' . "\0" . 'country', '' . "\0" . 'App\\Entity\\City' . "\0" . 'adresses'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\City' . "\0" . 'id', '' . "\0" . 'App\\Entity\\City' . "\0" . 'zip', '' . "\0" . 'App\\Entity\\City' . "\0" . 'cityName', '' . "\0" . 'App\\Entity\\City' . "\0" . 'country', '' . "\0" . 'App\\Entity\\City' . "\0" . 'adresses'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (City $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getZip(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZip', []);

        return parent::getZip();
    }

    /**
     * {@inheritDoc}
     */
    public function setZip(string $zip): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZip', [$zip]);

        return parent::setZip($zip);
    }

    /**
     * {@inheritDoc}
     */
    public function getCityName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCityName', []);

        return parent::getCityName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCityName(string $cityName): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCityName', [$cityName]);

        return parent::setCityName($cityName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry(): ?\App\Entity\Country
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(?\App\Entity\Country $country): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresses(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresses', []);

        return parent::getAdresses();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdress(\App\Entity\Adress $adress): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdress', [$adress]);

        return parent::addAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdress(\App\Entity\Adress $adress): \App\Entity\City
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdress', [$adress]);

        return parent::removeAdress($adress);
    }

}