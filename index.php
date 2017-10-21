<?php

require_once __DIR__ . '/vendor/autoload.php';

$cloud = new Zend\Tag\Cloud([
    'cloudDecorator' => [
        'decorator' => 'htmlcloud',
        'options'   => ['htmlTags' => ['ul' => ['class' => 'list-inline']]],
    ],
    'tagDecorator' => [
        'decorator' => 'htmltag',
        'options'   => ['minFontSize' => '15', 'maxFontSize' => '50'],
    ],
    'tags' => [
        [
            'title' => 'PHP',
            'weight' => 50,
            'params' => ['url' => '/tag/php'],
        ],
        [
            'title' => 'Codeigniter',
            'weight' => 10,
            'params' => ['url' => '/tag/codeigniter'],
        ],
        [
            'title' => 'Zend',
            'weight' => 5,
            'params' => ['url' => '/tag/zend'],
        ],
        [
            'title' => 'Laravel',
            'weight' => 30,
            'params' => ['url' => '/tag/laravel'],
        ],
        [
            'title' => 'Yii',
            'weight' => 25,
            'params' => ['url' => '/tag/yii'],
        ],
    ],
]);

echo $cloud;
