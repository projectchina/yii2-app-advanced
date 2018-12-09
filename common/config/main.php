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
            // 避免资源文件被缓存，Linux/MacOS 下有效，Windows 下无效
            // https://stackoverflow.com/questions/24819220/yii2-assets-clear-cache
            'linkAssets' => true,
        ],
    ],
    'language'=>'zh-CN',
    'timeZone'=>'Asia/Shanghai',
];
