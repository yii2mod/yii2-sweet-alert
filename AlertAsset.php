<?php

namespace yii2mod\alert;

use yii\web\AssetBundle;

/**
 * Class AlertAsset
 * @package yii2mod\alert
 */
class AlertAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/sweetalert';

    /**
     * @var array list of JavaScript files that this bundle contains.
     */
    public $js = [
        'dist/sweetalert.min.js',
    ];

    /**
     * @var array list of CSS files that this bundle contains.
     */
    public $css = [
        'dist/sweetalert.css'
    ];
}