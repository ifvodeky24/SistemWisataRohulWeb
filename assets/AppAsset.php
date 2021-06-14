<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'AdminLTE/plugins/fontawesome-free/css/all.min.css',
        'AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'AdminLTE/plugins/jqvmap/jqvmap.min.css',
        'AdminLTE/dist/css/adminlte.min.css',
        'AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'AdminLTE/plugins/daterangepicker/daterangepicker.css',
        'AdminLTE/plugins/summernote/summernote-bs4.min.css',
        'AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    ];
    public $js = [
      'AdminLTE/plugins/jquery/jquery.min.js',
      'AdminLTE/plugins/jquery-ui/jquery-ui.min.js',
      'AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js',
      'AdminLTE/plugins/chart.js/Chart.min.js',
      'AdminLTE/plugins/sparklines/sparkline.js',
      'AdminLTE/plugins/jqvmap/jquery.vmap.min.js',
      'AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js',
      'AdminLTE/plugins/jquery-knob/jquery.knob.min.js',
      'AdminLTE/plugins/moment/moment.min.js',
      'AdminLTE/plugins/daterangepicker/daterangepicker.js',
      'AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
      'AdminLTE/plugins/summernote/summernote-bs4.min.js',
      'AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
      'AdminLTE/dist/js/adminlte.js',
      'AdminLTE/dist/js/demo.js',
      'AdminLTE/dist/js/pages/dashboard.js',
      // 'AdminLTE/dist/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}