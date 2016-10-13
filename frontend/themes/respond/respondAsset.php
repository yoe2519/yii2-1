<?php
namespace frontend\themes\respond;

use yii\web\AssetBundle;

class respondAsset extends  AssetBundle {
    public $sourcePath = '@frontend/themes/respond/assets';
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap-responsive.css',
        //'css/custom.css',
    ];
    public $js = [
        'js/application.js',
        'js/bootstrap-alert.js',
        'js/bootstrap-button.js',
        'js/bootstrap-carousel.js',
        'js/bootstrap-collapse.js',
        'js/bootstrap-dropdown.js',
        'js/bootstrap-modal.js',
        'js/bootstrap-popover.js',
        'js/bootstrap-scrollspy.js',
        'js/bootstrap-tab.js',
        'js/bootstrap-tooltip.js',
        'js/bootstrap-transition.js',
        'js/bootstrap-typeahead.js',
        'js/bootstrap.js',
        'js/bootstrap.min.js',
        'js/html5.js',
        'js/jquery-1.7.1.min.js',
        'js/jquery-ui-1.8.18.custom.min.js',
        'js/jquery.smooth-scroll.min.js',
        'js/lightbox.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
