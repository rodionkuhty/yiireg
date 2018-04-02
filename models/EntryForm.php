<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 26.03.2018
 * Time: 23:37
 */


namespace app\models;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}