<?php

namespace Webix\Asset;

use yii\web\AssetBundle;

/**
 * Asset bundle for the DHTMLX library.
 */
class WebixAsset extends AssetBundle
{
    public $sourcePath = '@bower/webix/codebase';
    public $css = [
        'webix.css'
    ];
    public $js = [
        'webix.js'
    ];
    public $jsOptions = ['position' => 1]; //Script should be in head
}
