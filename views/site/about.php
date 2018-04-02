<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Cars;
use app\models\TestForm;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>


    <?$form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']]);?>

<!--        --><?//=$form->field($model, 'name')->label('Name');?>
<!--        --><?//=$form->field($model, 'email')->label('Email');?>
<!--       --><?//=$form->field($model, 'text')->label('Your Message')->textarea();?>

    <?=$form->field($model, 'name');?>
    <?=$form->field($model, 'email');?>
    <?=$form->field($model, 'text')->textarea();?>
    <?= Html::submitButton('Отправить',['class'=>"btn btn-success"])?>
    <?$form = ActiveForm::end();?>





    <code><?= __FILE__ ?></code>
</div>
