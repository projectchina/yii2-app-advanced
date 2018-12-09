<?php
return [
    'aliases' => [
        '@bower' => dirname(dirname(__DIR__)) . '/node_modules',
        '@npm' => dirname(dirname(__DIR__)) . '/node_modules',

    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            'bundles' => array_merge(
                require(__DIR__ . '/assets-default.php'),
                require(__DIR__ . '/assets-extended.php')
            ),
        ],
    ],
];
