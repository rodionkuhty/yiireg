<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 01.04.2018
 * Time: 23:17
 */

namespace app\models;
use yii\web\IdentityInterface;


use yii\db\ActiveRecord;

class Users extends ActiveRecord implements IdentityInterface
{
//    public static function tableName()
//    {
//        return '{{%users}}';
//    }
//
//    public static function findIdentity ($login)
//    {
//        return static ::findOne(['login'=> $login]);
//    }
//
//    public static function($password)
//    {
//        return static ::findOne(['password'=> $password]);
//    }


    public static function findIdentity($id)
    {
//        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        return static ::findOne(['id'=> $id]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
//        foreach (self::$users as $user) {
//            if ($user['accessToken'] === $token) {
//                return new static($user);
//            }
//        }
//
//        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
//        foreach (self::$users as $user) {
//            if (strcasecmp($user['username'], $username) === 0) {
//                return new static($user);
//            }
//        }
//
//        return null;
        return static ::findOne(['login'=> $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
//        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
//        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }










}