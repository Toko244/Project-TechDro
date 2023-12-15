<?php

return [
    'id' => 21,
    'type' => 21,
    'style' => 2,
    'section' => false,
    'manual' => true,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/postComponent',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'redirect_link' => [
                'type' => 'slug',
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
