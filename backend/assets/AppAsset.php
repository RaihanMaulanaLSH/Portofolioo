<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'vendors/feather/feather.css',
        'vendors/ti-icons/css/themify-icons.css',
        'vendors/css/vendor.bundle.base.css',
        'vendors/datatables.net-bs4/dataTables.bootstrap4.css',
        'vendors/ti-icons/css/themify-icons.css',
        'js/select.dataTables.min.css',
        'css/vertical-layout-light/style.css',

    ];
    public $js = [
        'vendors/js/vendor.bundle.base.js',
        'vendors/chart.js/Chart.min.js',
        'vendors/datatables.net/jquery.dataTables.js',
        'vendors/datatables.net-bs4/dataTables.bootstrap4.js',
        'js/dataTables.select.min.js',
        'js/off-canvas.js',
        'js/off-canvas.js',
        'js/hoverable-collapse.js',
        'js/template.js',
        'js/settings.js',
        'js/todolist.js',
        'js/dashboard.js',
        'js/Chart.roundedBarCharts.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset',
    ];
}
