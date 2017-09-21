<?php

return [
    'template'               => [
        // 模板后缀
        'view_suffix'  => 'htm',
    ],
    'view_replace_str'  =>  [
        '__PUBLIC__'    => '/public/',
        '__ROOT__'      => '/',
        '__ADMIN__'     => '/static/admin',
        '__JS__'        => '/static/admin/js',
        '__CSS__'       => '/static/admin/css',
        '__IMG__'       => '/static/admin/images',
    ],
];