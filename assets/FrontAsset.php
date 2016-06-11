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
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/font_awesome.css',
		'css/styles.css',
		'css/custom.css',
    ];
    public $js = [
    	// '//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css',
    	// '//code.jquery.com/ui/1.11.4/jquery-ui.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyAjMBVn_GZdUo1xzvfQwcggnBrXN8bcMas',
		'js/nivo_slider.min.js',
		'js/flexnav.min.js',
		'js/magnific.min.js',
		'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
