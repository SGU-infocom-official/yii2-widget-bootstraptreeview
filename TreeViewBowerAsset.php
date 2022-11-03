<?php

namespace sguinfocom\widget;


use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\bootstrap4\BootstrapAsset;

/**
 * Bower asset for Bootstrap Tree View
 *
 * @author eXeCUT
 */
class TreeViewBowerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/bstreeview';
    public $js = ['dist/js/bstreeview.min.js'];

    public $css = ['dist/css/bstreeview.min.css'];

    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
}
