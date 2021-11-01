<?php
return [
    'debug' => true,
    'blocks' => [
        'fieldsets' => [
            'custom' => [
                'label' => 'Entry Blocks',
                'type' => 'group',
                'fieldsets' => [
                    'heading',
                    'text',
                    'soundcloud',
                    'image',
                    'video',
                ]
            ],
            // 'kirby' => [
            //     'label' => 'Kirby blocks',
            //     'type' => 'group',
            //     'open' =>   'false',
            //     'fieldsets' => [
            //         'heading',
            //         'text',
            //         'list',
            //         'quote',
            //         'image',
            //         'video',
            //         'code',
            //         'markdown'
            //     ]
            // ]
        ]
    ]
];
