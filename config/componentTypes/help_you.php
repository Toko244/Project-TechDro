<?php

return [
    'id' => 7,
    'type' => 1,
    'style' => 2,
    'section' => false,
    'manual' => false,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/help_you',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ]
        ],
        'nonTrans' => [
            'link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ]
        ],
    ],
];
