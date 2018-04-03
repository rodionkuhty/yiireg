<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 01.04.2018
 * Time: 21:43
 */

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Users;
use yii;


class RegForm extends Model
{
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['login','unique','targetClass' =>'app\models\Users'],//Что это такое?
            ['password','string','min'=>2, 'max' => 10]

        ];
    }


    public function signUp()
    {
        $user  = new Users();
        $user->login = $this->login;
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);;
        //Чё то не дотумкал!
        return $user->save();
    }
}