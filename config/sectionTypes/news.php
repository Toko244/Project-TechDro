<?php

return [
    'id' => 5,
    'type' => 5,
    'style' => 1,
    'folder' => 'news',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'slug' => [
                'type' => 'slug',
                'error_msg' => 'slug_is_required',
                'required' => 'required',
                'data-icon' => '-',

            ],
            'desc' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],
            'text' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],
            'active' => [
                'type' => 'checkbox',
                'required' => ''
            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
                'required' => ''
            ],

            'date' => [
                'type' => 'date',
                'required' => ''
            ]
        ],

    ],
];
