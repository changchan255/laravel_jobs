<?php



return [
    'sidebar' => [
        [
            'title' => 'Thông tin công ty',
            'icon' => 'la la-file-text',
            'route' => 'get_employer.company.index'
        ],
        [
            'title' => 'Tin tuyển dụng',
            'icon' => 'la la-briefcase',
            'route' => 'get_employer.job.index'
        ],
        [
            'title' => 'Danh sách ứng tuyển',
            'icon' => 'la la-black-tie',
            'route' => 'get_employer.apply_job.index'
        ],
        [
            'title' => 'Đăng xuất',
            'icon' => 'la la-unlink',
            'route' => 'get.logout'
        ]
    ]
    ];
