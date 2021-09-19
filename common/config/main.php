<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'name' => 'Shailline Rice Shop API. ',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    /*Ensure module config is outside the components array*/
    'modules' => [
        'api' => [
            'class' => 'common\modules\api\Module',
        ],
    ],
];
