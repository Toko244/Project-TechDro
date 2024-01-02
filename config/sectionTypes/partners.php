<?php

return [
    'id' => 4,
    'type' => 4,
    'style' => 1,
    'folder' => 'partners',
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
                'required' => '',

            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
                'required' => '',
            ],
            'website_link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
        ],

    ],
];
