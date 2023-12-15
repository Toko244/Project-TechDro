<?php

return [
    'id' => 28,
    'type' => 28,
    'style' => 2,
    'section' => false,
    'manual' => false,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/postslider',
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
                'required' => '',
                'data-icon' => '',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'image' => [
                'type' => 'image',
            ],

            'date' => [
                'type' => 'date',
            ],
        ],
    ],
];
