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
use app\models\LogForm;
use yii;
use yii\web\Session;

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
//                return $this->render('login');
            }
        }
       return $this->render('index', compact('model'));
    }

    public function actionLogin()
    {
        $form = new LogForm();
//        $regModel = new RegForm();
//        $regModel->login = $_POST['RegForm']['login'];
//        $regModel->password = $_POST['RegForm']['password'];
//
//        //$regModel->attributes = Yii::$app->request->post('RegForm');
//        $model = Users::find()->where(['login'=> $regModel->login] )->one();
//        if(empty($model)){
//            $user = new Users();
////            $user->
//        }

        $form->attributes = Yii::$app->request->post('LogForm');


        $model = Users::find()->where(['login'=> $form->login] )->one();
        //var_dump($model);

        if(!empty($model)){
           $userPassword = Users::find()->where(['password' => $form->password])->one();
//            echo $userPassword;
//            var_dump($form);
//           return $this->render('login',compact('userPassword','form'));
            $session = Yii::$app->session;
            $session->set('language', 'en-US');
            return $this->render('login');


        }else{
            $message = 'Auth Please!';
            return $this->render('login', compact('message'));
            //return false;
            //return $this->goHome();
        }

      //return $this->render('login', compact('form'));
    }
}