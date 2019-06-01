<?php
    return  [
        'CUSTOM_IMAGE' =>[
            'slide' =>[
                'name' => 'Slide',
                'data' => 1,
                'type' => 'list',
                'note' => '',
                'limit' => 0
            ],
            'header' =>[
                'name' => 'Header',
                'data' => 2,
                'type' => 'image',
                'limit' => 1,
                'note' => '',
            ],
            'home_bg_phuong_phap' =>[
                'name' => 'Background phương pháp nâng mũi',
                'data' => 3,
                'type' => 'image',
                'limit' => 1,
                'note' => '',
            ],
            'home_phuong_phap' =>[
                'name' => 'Các phương pháp nâng mũi',
                'data' => 4,
                'limit' => 0,
                'note' => '',
            ],
            'home_kinh_nghiem' =>[
                'name' => 'Chia sẻ kinh nghiệm',
                'data' => 5,
                'limit' => 6,
                'note' => '',
            ],
            'home_kien_thuc' =>[
                'name' => 'Kiến thức nâng mũi đẹp',
                'data' => 7,
                'limit' => 5,
                'note' => '',
            ],
            'home_bg_cau_hoi' =>[
                'name' => 'Background tư vấn nâng mũi',
                'data' => 8,
                'limit' => 1,
                'note' => '',
            ],
            'home_banner_trang_con' =>[
                'name' => 'Banner trang con',
                'data' => 9,
                'limit' => 1,
                'note' => '',
            ],
            'home_banner_bottom_post' =>[
                'name' => 'Banner cuối bài viết',
                'data' => 10,
                'limit' => 1,
                'note' => '',
            ],
            'trang_con_banner_video_sidebar' =>[
                'name' => 'Banner sidebar video',
                'data' => 11,
                'limit' => 1,
                'note' => '',
            ],
            'trang_con_banner_truoc_sau_nang_mui' =>[
                'name' => 'Banner sidebar trước và sau nâng mũi',
                'data' => 12,
                'limit' => 1,
                'note' => '',
            ],
            'mulitple_why' =>[
                'name' => 'Hình ảnh những lý do',
                'data' => 13,
                'limit' => 5,
                'note' => '',
            ],

        ],
        #END setting image
        # cấu hình trang đơn
        'CUSTOM_SINGLE_PAGE' =>[
            'list_doctor' =>[
                'name' => 'Danh sách bác sĩ',
                'data' => 1,
                'note' => '',
                'limit' => 0
            ],
            'one_nav_right_chi_phi' =>[
                'name' => 'Bài viết thứ nhất ở khối bên phải màn hình',
                'data' => 2,
                'note' => 'Bài viết hiển thị ở khối bên phải màn hình',
                'limit' => 1
            ],
            'list_nav_right_two' =>[
                'name' => 'Danh sách bài viết thứ 2 ở khối bên phải màn hình',
                'data' => 3,
                'note' => 'Bài viết hiển thị ở khối bên phải màn hình',
                'limit' => 6
            ],
        ],
        #END setting trang don
        # cấu hình danh muc bai viet
        'CUSTOM_NEWS_CATEGORY' =>[
            'home_kien_thuc' =>[
                'name' => 'Kiến thức nâng mũi đẹp',
                'data' => 1,
                'note' => '',
                'limit' => 4
            ],
            'home_cau_hoi' =>[
                'name' => 'Danh sách câu hỏi ở trang chủ',
                'data' => 2,
                'limit' => 4,
                'note' => '',
            ],
            'list_care' =>[
                'name' => 'Bài viết liên quan',
                'data' => 3,
                'limit' => 4,
                'note' => '',
            ],
            'list_comment' => [
                'name' => 'Danh sách bình luận',
                'data' => 5 ,
                'note' => '',
                'limit' => 0,
            ],
            'list_xem_nhieu' => [
                'name' => 'Danh sách bài viết xem nhiều',
                'data' => 6,
                'note' => '',
                'limit' => 5,
            ],
            'list_lien_quan' => [
                'name' => 'Danh sách bài viết liên quan',
                'data' => 7,
                'note' => '',
                'limit' => 15,
            ],
            'list_nav_right_five' => [
                'name' => 'Danh sách bài viết hiện thị ở khối phải màn hình mục thứ 5',
                'data' => 8,
                'note' => '',
                'limit' => 7,
            ]
        ]
        #END setting danh muc bai viet
    ];