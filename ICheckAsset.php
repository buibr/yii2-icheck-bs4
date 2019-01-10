<?php

/**
 * Created by PhpStorm.
 * User: buibr - http://buibr.com
 * Date: 29.04.2017
 * Time: 11:49
 */

namespace buibr\ICheck;

use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@bower/icheck';

    public $js = [
        'icheck.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}