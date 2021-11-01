<?php

Kirby::plugin('eatart/blocks', [
    'blueprints' => [
        'blocks/soundcloud'  => __DIR__ . '/blueprints/blocks/soundcloud.yml',


    ],
    'snippets'   => [

        'blocks/soundcloud'  => __DIR__ . '/snippets/blocks/soundcloud.php',

    ]
]);
