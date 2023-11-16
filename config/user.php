<?php

return [
    'drop_menu' => [
        [
            'name' => 'Cập nhật thông tin',
            'icon' => 'la la-user',
            'route' => 'get_user.user_info.index'
        ],
        [
            'name' => 'Danh sách ứng tuyển',
            'icon' => 'la la-file-text',
            'route' => 'get_user.apply_job.index'
        ],
        [
            'name' => 'Danh sách yêu thích',
            'icon' => 'la la-heart-o',
            'route' => 'get_user.job.favourite'
        ],
    ],
    'sidebar' => [
        [
            'title' => 'Cập nhật thông tin',
            'icon' => 'la la-user',
            'route' => 'get_user.user_info.index'
        ],
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
            'route' => 'get_user.update_password.index'
        ],
        [
            'title' => 'Đăng xuất',
            'icon' => 'la la-unlink',
            'route' => 'get.logout'
        ]
    ]

];
