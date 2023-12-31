<?php

return [
    'id' => 1,
    'type' => 1,
    'style' => 1,
    'fields' => [
        'title' => [
            'type' => 'text',
            'reqired' => 'required',
            'max' => '100',
            'min' => '3',
            'name' => 'title',
            'translateble' => true,

        ],
        'slug' => [
            'type' => 'slug',
            'reqired' => 'required',
            'max' => '50',
            'min' => '3',
            'name' => 'slug',
            'translateble' => true,

        ],
        'parent' => [
            'type' => 'select',
            'reqired' => 'required',
            'options' => 'sections',
            'max' => '20000',
            'name' => 'parent_id',
        ],
        'type' => [
            'type' => 'select',
            'reqired' => 'required',
            'options' => 'sectionTypes',
            'name' => 'type',
        ],
        'active' => [
            'type' => 'checkbox',
            'options' => 'sections',
            'translateble' => true,
            'required' => ''
        ],
    ],

];
