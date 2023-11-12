<?php

return [
    [
        'name' => 'Tổng quan',
        'icon' => 'account_balance',
        'route' => 'get_admin.index'
    ],
    [
        'name' => 'Ngành nghề',
        'icon' => 'vertical_split',
        'route' => 'get_admin.career.index'
    ],
    [
        'name' => 'Thuộc tính',
        'icon' => 'preview',
        'route' => 'get_admin.attribute.index'
    ],
    [
        'name' => 'Jobs',
        'icon' => 'work',
        'route' => 'get_admin.job.index'
    ],
    [
        'name' => 'Ứng viên',
        'icon' => 'group',
        'route' => 'get_admin.user.index'
    ],
    [
        'name' => 'Ứng tuyển',
        'icon' => 'contact_page',
        'route' => 'get_admin.apply_job.index'
    ],
];
