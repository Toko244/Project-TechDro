<?php

return [
    'id' => 10,
    'type' => 10,
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
            'logo Upload' => [
                'type' => 'file',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
            ],
            'Official Website Link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
        ],

    ],
];
