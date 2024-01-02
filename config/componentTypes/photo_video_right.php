<?php

return [
    'id' => 4,
    'type' => 1,
    'style' => 2,
    'section' => false,
    'manual' => false,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/photo_video_right',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'button_title' => [
                'type' => 'text',
                'required' => '',
                'data-icon' => '',
            ],
            'button_link' => [
                'type' => 'text',
                'required' => '',
                'data-icon' => ''
            ],
        ],
        'nonTrans' => [
            'image' => [
                'type' => 'image',
                'required' => '',
            ],

        ]
    ],
];
