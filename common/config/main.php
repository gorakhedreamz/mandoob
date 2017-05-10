<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    //'timezone' => 'Asia/Kolkata',
    'components' => [

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'Utility' => [
            'class' => 'common\components\Utility',
        ],
        
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
        ],

    ],
];
