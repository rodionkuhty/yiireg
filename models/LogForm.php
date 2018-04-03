<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 03.04.2018
 * Time: 14:51
 */

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Users;
use yii;

class LogForm extends Model
{
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
//            ['login','unique','targetClass' =>'app\models\Users'],//Что это такое?
            ['password','string','min'=>2, 'max' => 10]

        ];
    }
}