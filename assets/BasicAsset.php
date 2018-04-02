<?php
/**
 * Created by PhpStorm.
 * User: братья
 * Date: 31.03.2018
 * Time: 23:03
 */

namespace app\assets;


use yii\web\AssetBundle;

class BasicAsset extends  AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/style.css'
    ];
    public $js = [
        'js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}