<?php
namespace danfercf\persistenthandler;
use \Facebook\PersistentData\PersistentDataInterface;
use Yii;

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
        $session = Yii::$app->session;
        return $session->get($this->sessionPrefix . $key);
    }

    /**
     * @inheritdoc
     */
    public function set($key, $value)
    {
        $session = Yii::$app->session;
        $session->set($this->sessionPrefix . $key, $value);
    }
}