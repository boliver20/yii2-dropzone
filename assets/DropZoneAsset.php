<?php

namespace boliver\dropzone\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for DropZone Widget
 */
class DropZoneAsset extends AssetBundle
{

    public $sourcePath = '@bower/dropzone/dist';

    public $js = [
        "min/dropzone.min.js"
    ];

    public $css = [
        "min/dropzone.min.css"
    ];
}