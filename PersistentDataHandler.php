<?php
namespace danfercf\persistenthandler;
use \Facebook\PersistentData\PersistentDataInterface;
use \Yii\Web\Session;

class PersistentDataHandler implements PersistentDataInterface
{
    /**
     * @var string Prefix to use for session variables.
     */
    protected $sessionPrefix = 'FBRLH_';

    /**
     * @inheritdoc
     */
    public function get($key)
    {
        $session = new Session;
        $session->open();
        return  $session[$this->sessionPrefix . $key];
    }

    /**
     * @inheritdoc
     */
    public function set($key, $value)
    {
        $session = new Session;
        $session->open();
        $session[$this->sessionPrefix . $key] = $value;
    }
}