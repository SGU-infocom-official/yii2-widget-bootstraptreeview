<?php

namespace sguinfocom\widget;

use sguinfocom\yii\web\AssetBundle;

/**
 * Custom styles
 *
 * @author eXeCUT
 */
class TreeViewAsset extends AssetBundle
{
    public $depends = [
        TreeViewBowerAsset::class,
    ];
}
