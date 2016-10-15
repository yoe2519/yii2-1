<?php
namespace frontend\themes\colormag;

use yii\web\AssetBundle;

class colormagAsset extends  AssetBundle {
    public $sourcePath = '@frontend/themes/colormag/assets';
    public $css = [
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/font.css',
        'css/structure.css',
        //'css/custom.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/html5shiv.min.js',
        'js/jquery.min.js',
        'js/respond.min.js',
        'js/wow.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    public function init(){
        parent::init();
    }
}
