<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/adminBootstrap/';
    public $css = [
        'css/bootstrap.css',
        'css/ace.css',
        'css/ace.onpage-help.css',
        'css/ace-fonts.css',
        'css/ace-ie.css',
        'css/ace-part2.css',
        'css/ace-rtl.css',
        'css/ace-skins.css',
        'css/font-awesome.css'
    ];
    public $js = [
        //'js/jquery.js',
        'js/bootstrap.js',
        'js/ace.js',
        'js/ace-elements.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
