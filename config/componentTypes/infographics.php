<?php

return [
    'id' => 2,
    'type' => 1,
    'style' => 2,
    'section' => true,
    'manual' => false,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [1],
    'directoryType' => null,
    'folder' => '../components/infographics',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
        ],
        'nonTrans' => [
            'number' => [
                'type' => 'number',
                'required' => 'required',
            ],

            'active' => [
                'type' => 'checkbox',
                'required' => ''
            ]
        ],
    ],
];
