<?php

namespace FloApps\RedactorXI18n;

use yii\web\AssetBundle;

class RedactorXI18nAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets/';
    public $js = [
        'js/fi.js',
        'js/sv.js',
    ];
}
