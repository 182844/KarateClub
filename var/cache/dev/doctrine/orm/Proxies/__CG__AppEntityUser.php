<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'phones', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\User' . "\0" . 'belt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'receiptDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'attachedFiles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registration', '' . "\0" . 'App\\Entity\\User' . "\0" . 'histories', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sex', '' . "\0" . 'App\\Entity\\User' . "\0" . 'contactLists', '' . "\0" . 'App\\Entity\\User' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\User' . "\0" . 'updatedImage', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userConnected', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ownerUser', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdUs', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'birthdate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'notifications', '' . "\0" . 'App\\Entity\\User' . "\0" . 'fedNum', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isTrial', '' . "\0" . 'App\\Entity\\User' . "\0" . 'bars'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'phones', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\User' . "\0" . 'belt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'receiptDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'attachedFiles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'registration', '' . "\0" . 'App\\Entity\\User' . "\0" . 'histories', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sex', '' . "\0" . 'App\\Entity\\User' . "\0" . 'contactLists', '' . "\0" . 'App\\Entity\\User' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\User' . "\0" . 'updatedImage', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isActive', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userConnected', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ownerUser', '' . "\0" . 'App\\Entity\\User' . "\0" . 'createdUs', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'birthdate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'notifications', '' . "\0" . 'App\\Entity\\User' . "\0" . 'fedNum', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isTrial', '' . "\0" . 'App\\Entity\\User' . "\0" . 'bars'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setImageName(?string $imageName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageFile = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageFile]);

        parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
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
    public function getPhones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhones', []);

        return parent::getPhones();
    }

    /**
     * {@inheritDoc}
     */
    public function addPhone(\App\Entity\Phone $phone): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPhone', [$phone]);

        return parent::addPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function removePhone(\App\Entity\Phone $phone): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePhone', [$phone]);

        return parent::removePhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdress(\App\Entity\Adress $adress): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdress', [$adress]);

        return parent::addAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdress(\App\Entity\Adress $adress): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdress', [$adress]);

        return parent::removeAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function getBelt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBelt', []);

        return parent::getBelt();
    }

    /**
     * {@inheritDoc}
     */
    public function setBelt(?string $belt): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBelt', [$belt]);

        return parent::setBelt($belt);
    }

    /**
     * {@inheritDoc}
     */
    public function getReceiptDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReceiptDate', []);

        return parent::getReceiptDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setReceiptDate(?\DateTimeInterface $receiptDate): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReceiptDate', [$receiptDate]);

        return parent::setReceiptDate($receiptDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachedFiles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachedFiles', []);

        return parent::getAttachedFiles();
    }

    /**
     * {@inheritDoc}
     */
    public function addAttachedFile(\App\Entity\AttachedFile $attachedFile): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAttachedFile', [$attachedFile]);

        return parent::addAttachedFile($attachedFile);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAttachedFile(\App\Entity\AttachedFile $attachedFile): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAttachedFile', [$attachedFile]);

        return parent::removeAttachedFile($attachedFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistration(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistration', []);

        return parent::getRegistration();
    }

    /**
     * {@inheritDoc}
     */
    public function addRegistration(\App\Entity\Registration $registration): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRegistration', [$registration]);

        return parent::addRegistration($registration);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRegistration(\App\Entity\Registration $registration): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRegistration', [$registration]);

        return parent::removeRegistration($registration);
    }

    /**
     * {@inheritDoc}
     */
    public function getHistories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHistories', []);

        return parent::getHistories();
    }

    /**
     * {@inheritDoc}
     */
    public function addHistory(\App\Entity\History $history): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHistory', [$history]);

        return parent::addHistory($history);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHistory(\App\Entity\History $history): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHistory', [$history]);

        return parent::removeHistory($history);
    }

    /**
     * {@inheritDoc}
     */
    public function getSex(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSex', []);

        return parent::getSex();
    }

    /**
     * {@inheritDoc}
     */
    public function setSex(string $sex): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSex', [$sex]);

        return parent::setSex($sex);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactLists(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactLists', []);

        return parent::getContactLists();
    }

    /**
     * {@inheritDoc}
     */
    public function addContactList(\App\Entity\ContactList $contactList): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContactList', [$contactList]);

        return parent::addContactList($contactList);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContactList(\App\Entity\ContactList $contactList): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContactList', [$contactList]);

        return parent::removeContactList($contactList);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserConnected(): ?\App\Entity\UserConnected
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserConnected', []);

        return parent::getUserConnected();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserConnected(?\App\Entity\UserConnected $userConnected): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserConnected', [$userConnected]);

        return parent::setUserConnected($userConnected);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnerUser(): ?\App\Entity\UserConnected
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnerUser', []);

        return parent::getOwnerUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwnerUser(\App\Entity\UserConnected $ownerUser): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwnerUser', [$ownerUser]);

        return parent::setOwnerUser($ownerUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedUs(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedUs', []);

        return parent::getCreatedUs();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedUs(\DateTimeInterface $createdUs): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedUs', [$createdUs]);

        return parent::setCreatedUs($createdUs);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(?string $firstName): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthdate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthdate', []);

        return parent::getBirthdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthdate(\DateTimeInterface $birthdate): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthdate', [$birthdate]);

        return parent::setBirthdate($birthdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotifications(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotifications', []);

        return parent::getNotifications();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotification(\App\Entity\Notification $notification): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotification', [$notification]);

        return parent::addNotification($notification);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotification(\App\Entity\Notification $notification): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotification', [$notification]);

        return parent::removeNotification($notification);
    }

    /**
     * {@inheritDoc}
     */
    public function getFedNum(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFedNum', []);

        return parent::getFedNum();
    }

    /**
     * {@inheritDoc}
     */
    public function setFedNum(?string $fedNum): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFedNum', [$fedNum]);

        return parent::setFedNum($fedNum);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive(?bool $isActive): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsTrial(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsTrial', []);

        return parent::getIsTrial();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsTrial(?bool $isTrial): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsTrial', [$isTrial]);

        return parent::setIsTrial($isTrial);
    }

    /**
     * {@inheritDoc}
     */
    public function getBars(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBars', []);

        return parent::getBars();
    }

    /**
     * {@inheritDoc}
     */
    public function setBars(?int $bars): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBars', [$bars]);

        return parent::setBars($bars);
    }

}
