<?php

return [
    'defaults'      => [
        'wrapper_class'       => 'form-group',
        'wrapper_error_class' => 'has-error',
        'label_class'         => 'control-label',
        'field_class'         => 'form-control',
        'error_class'         => 'text-danger'
    ],
    // Templates
    'form'          => 'laravel4-form-builder::form',
    'text'          => 'laravel4-form-builder::text',
    'textarea'      => 'laravel4-form-builder::textarea',
    'button'        => 'laravel4-form-builder::button',
    'radio'         => 'laravel4-form-builder::radio',
    'checkbox'      => 'laravel4-form-builder::checkbox',
    'select'        => 'laravel4-form-builder::select',
    'choice'        => 'laravel4-form-builder::choice',
    'repeated'      => 'laravel4-form-builder::repeated',
    'child_form'    => 'laravel4-form-builder::child_form',
    'collection'    => 'laravel4-form-builder::collection',
    'static'        => 'laravel4-form-builder::static',

    'default_namespace' => '',

    'custom_fields' => [
//        'datetime' => 'App\Forms\Fields\Datetime'
    ]
];
