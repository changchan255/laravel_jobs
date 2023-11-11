<?php

return [
    'drop_menu' => [
        [
            'name' => 'Cập nhật công ty',
            'icon' => 'la la-file-text',
            'route' => 'get_employer.company.index'
        ]
    ],
    'sidebar' => [
        [
            'title' => 'Danh sách ứng tuyển',
            'icon' => 'la la-file-text',
            'route' => 'get_user.apply_job.index'
        ],
        [
            'title' => 'Danh sách yêu thích',
            'icon' => 'la la-heart-o',
            'route' => 'get_user.job.favourite'
        ],
        [
            'title' => 'Cập nhật mật khẩu',
            'icon' => 'la la-lock',
            'route' => ''
        ],
        [
            'title' => 'Đăng xuất',
            'icon' => 'la la-unlink',
            'route' => ''
        ]
    ]

];
