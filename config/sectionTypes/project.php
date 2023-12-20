<?php

return [
    'id' => 6,
    'type' => 6,
    'style' => 1,
    'folder' => 'projects',
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
            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
            ],
        ],

    ],
];
