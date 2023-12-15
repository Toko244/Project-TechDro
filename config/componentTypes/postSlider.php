<?php

return [
    'id' => 31,
    'type' => 31,
    'style' => 1,
    'section' => false,
    'manual' => true,
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
            'images' => [
                'type' => 'images',
            ],

            'date' => [
                'type' => 'date',
            ],
        ],
    ],
];
