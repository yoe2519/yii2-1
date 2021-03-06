<?php
namespace frontend\themes\ratchakarn;

class RatchakarnAsset extends  \yii\web\AssetBundle
{
    public $sourcePath = '@frontend/themes/ratchakarn/assets';
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap-theme.css',
        'css/custom.css',
    ];
    public $js = [
        'js/jquery.cookie.js',
        'js/ready.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
