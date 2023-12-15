<?php

return [
    'id' => 33,
    'type' => 33,
    'style' => 2,
    'section' => false,
    'manual' => true,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/imagebanner',
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
            'image' => [
                'type' => 'image',
            ],

            'date' => [
                'type' => 'date',
            ],
        ],
    ],
];
