<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 01.04.2018
 * Time: 21:19
 */

namespace app\controllers;
use app\models\User;
use yii\web\Controller;
use app\models\RegForm;
use app\models\Users;
use yii;

class EnterController extends Controller
{
    public function actionIndex()
    {

        $model = new RegForm();

        if(isset($_POST['RegForm'])){
           $model->attributes = Yii::$app->request->post('RegForm');
           //$model->login = $_POST['RegForm']['login'];
            if($model->validate() && $model->signUp()){
//                $model->signUp();
                return $this->goHome();
            }else{

            }
        }
       return $this->render('index', compact('model'));
    }

    public function actionLogin()
    {
        return $this->render('login');
    }
}