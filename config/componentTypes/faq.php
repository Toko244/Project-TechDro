<?php

return [
    'id' => 8,
    'type' => 1,
    'style' => 2,
    'section' => false,
    'manual' => false,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/faq',
    'fields' => [
        'trans' => [
            'question' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],

            'answer' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ]
        ],
        'nonTrans' => [

        ],
    ],
];
