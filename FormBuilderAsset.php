<?php

namespace meysampg\formbuilder;

use yii\web\AssetBundle;
use yii\base\InvalidConfigException;

class FormBuilderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/meysampg/yii2-formbuilder/assets/node_modules/formBuilder/dist';

    public $js = [
        'form-builder.min.js',
        'form-render.min.js',
    ];

    public $depends = [
        'yii\jui\JuiAsset',
    ];
}
