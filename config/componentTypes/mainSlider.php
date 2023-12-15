<?php

return [
    'id' => 20,
    'type' => 20,
    'style' => 2,
    'section' => false,
    'manual' => false,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/mainslider',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'desc' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],
            'redirect_link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
            ],

            'date' => [
                'type' => 'date',
            ],
        ],
    ],
];
