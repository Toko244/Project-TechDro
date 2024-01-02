<?php

return [
    'id' => 1,
    'type' => 1,
    'style' => 2,
    'section' => true,
    'manual' => false,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [1, 2],
    'directoryType' => null,
    'folder' => '../components/about_us',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'text' => [
                'type' => 'textarea',
                'required' => 'required',
                'data-icon' => ''
            ]
        ],
        'nonTrans' => [

        ],
    ],
];
