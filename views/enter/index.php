<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveField;
use app\models\RegForm;
//$model = new RegForm();

?>

<h1>Registration Form</h1>

<?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<?//= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>
<!---->
<?//= $form->field($model, 'password') ?>
<!---->
<!---->
<!--<div class="form-group">-->
<!--    --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--</div>-->
<!---->
<?php //ActiveForm::end(); ?>


<?$form = ActiveForm::begin();?>

<!--        --><?//=$form->field($model, 'name')->label('Name');?>
<!--        --><?//=$form->field($model, 'email')->label('Email');?>
<!--       --><?//=$form->field($model, 'text')->label('Your Message')->textarea();?>

<?=$form->field($model, 'login')->label('Логин');?>
<?=$form->field($model, 'password')->label('Пароль');?>

<?= Html::submitButton('Зарегистрироваться',['class'=>"btn btn-success"])?>
<?$form = ActiveForm::end();?>

<?




?>
