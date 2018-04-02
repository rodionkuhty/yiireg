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
    public static function tableName()
    {
        return '{{%users}}';
    }

    public static function findIdentity ($login)
    {
        return static ::findOne(['login'=> $login]);
    }

    public static function($password)
    {
        return static ::findOne(['password'=> $password]);
    }
}