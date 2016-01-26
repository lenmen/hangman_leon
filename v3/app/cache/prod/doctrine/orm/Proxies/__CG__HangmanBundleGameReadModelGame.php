<?php

namespace Proxies\__CG__\Hangman\Bundle\Game\ReadModel;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Game extends \Hangman\Bundle\Game\ReadModel\Game implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'id', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameId', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'word', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameStatus', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'letterGuessedCorrectly', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'letterWrongGuessed', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameWon', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameLost'];
        }

        return ['__isInitialized__', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'id', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameId', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'word', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameStatus', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'letterGuessedCorrectly', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'letterWrongGuessed', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameWon', '' . "\0" . 'Hangman\\Bundle\\Game\\ReadModel\\Game' . "\0" . 'gameLost'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Game $proxy) {
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
    public function getId()
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
    public function setGameId($gameId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGameId', [$gameId]);

        return parent::setGameId($gameId);
    }

    /**
     * {@inheritDoc}
     */
    public function getGameId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGameId', []);

        return parent::getGameId();
    }

    /**
     * {@inheritDoc}
     */
    public function getWord()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWord', []);

        return parent::getWord();
    }

    /**
     * {@inheritDoc}
     */
    public function setLetterWrongGuessed($letterWrongGuessed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLetterWrongGuessed', [$letterWrongGuessed]);

        return parent::setLetterWrongGuessed($letterWrongGuessed);
    }

    /**
     * {@inheritDoc}
     */
    public function getLetterWrongGuessed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLetterWrongGuessed', []);

        return parent::getLetterWrongGuessed();
    }

    /**
     * {@inheritDoc}
     */
    public function setLetterCorrectlyGuessed($letterCorrectlyGuessed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLetterCorrectlyGuessed', [$letterCorrectlyGuessed]);

        return parent::setLetterCorrectlyGuessed($letterCorrectlyGuessed);
    }

    /**
     * {@inheritDoc}
     */
    public function getLetterCorrectlyGuessed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLetterCorrectlyGuessed', []);

        return parent::getLetterCorrectlyGuessed();
    }

    /**
     * {@inheritDoc}
     */
    public function setGameStatus($gameStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGameStatus', [$gameStatus]);

        return parent::setGameStatus($gameStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getGameStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGameStatus', []);

        return parent::getGameStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getGameWon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGameWon', []);

        return parent::getGameWon();
    }

    /**
     * {@inheritDoc}
     */
    public function setGameWon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGameWon', []);

        return parent::setGameWon();
    }

    /**
     * {@inheritDoc}
     */
    public function getGameLost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGameLost', []);

        return parent::getGameLost();
    }

    /**
     * {@inheritDoc}
     */
    public function setGameLost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGameLost', []);

        return parent::setGameLost();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

}