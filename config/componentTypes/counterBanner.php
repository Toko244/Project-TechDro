<?php

return [
    'id' => 29,
    'type' => 29,
    'style' => 2,
    'section' => false,
    'manual' => true,
    'image' => false,
    'multiple_posts' => false,
    'sectionTypes' => [],
    'directoryType' => null,
    'folder' => '../components/counter',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'value' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'date' => [
                'type' => 'date',
            ],
        ],
    ],
];
