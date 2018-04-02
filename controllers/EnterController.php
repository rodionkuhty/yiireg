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
            }
        }
       return $this->render('index', compact('model'));
    }

    public function actionLogin()
    {
        $regModel = new RegForm();
        $regModel->login = $_POST['RegForm']['login'];
        $regModel->password = $_POST['RegForm']['password'];

        //$regModel->attributes = Yii::$app->request->post('RegForm');
        $model = Users::find()->where(['login'=> $regModel->login] )->one();
        if(empty($model)){
            $user = new Users();
            $user->
        }
        return $this->render('login');
    }
}