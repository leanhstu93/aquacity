<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'timeZone' => 'Asia/Ho_Chi_Minh',


	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.yii-mail.YiiMailMessage',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		 'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1','113.172.107.91','*'),
		),

	),

	// application components
	'components'=>array(
		'Date' => array(
		     'class'=>'application.components.Date',
		     //And integer that holds the offset of hours from GMT e.g. 4 for GMT +4
		     'offset' => 4,
		),

		 'errorHandler'=>array(
            'errorAction' => 'site/error'
        ),
		'mail' => array(
                'class' => 'ext.yii-mail.YiiMail',
                'transportType'=>'smtp',
                'transportOptions'=>array(
                        'host'=>'smtp.gmail.com',
                        'username'=>'leanh.stu93@gmail.com',
                        'password'=>'ukzmzuqifgzgzwyk',
                        'port'=>'465',
                        'encryption'=>'ssl',
                ),
                'viewPath' => 'application.views.mail',
                'logging' => true,

				'dryRun' => false
        ),

		'widgetFactory' => array(
            'widgets' => array(
                'CLinkPager' => array(
                    'htmlOptions' => array(
                        'class' => 'pagination'
                    ),
                    'header' => false,
                    'maxButtonCount' => 4,
                    'cssFile' => false,
                ),
                'CGridView' => array(
                    'htmlOptions' => array(
                        'class' => 'table-responsive'
                    ),
                    'pagerCssClass' => 'dataTables_paginate paging_bootstrap',
                    'itemsCssClass' => 'table table-striped table-hover',
                    'cssFile' => false,
                    'summaryCssClass' => 'dataTables_info',
                    'summaryText' => 'Hiển thị {start} tới {end} của {count} kết quả',
                    'template' => '{items}<div class="row"><div class="col-md-5 col-sm-12">{summary}</div><div class="col-md-7 col-sm-12">{pager}</div></div><br />',
                ),
            ),
        ),
	 'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('admin/login')
        ),


		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			 'urlFormat' => 'path',
            'showScriptName' => false,
            'urlSuffix' => '.html',
			'rules'=>array(


				'loai-tin/<alias>' => 'site/loaitin',
				'tags/<alias>' => 'site/tags',
				'authrender/<id>/<mangaunhien>' => 'site/AuthRender',
				'maxacthuc' => 'site/maxacthuc',
				'tim-kiem' => 'site/timkiem',
				'quan-ly-tai-khoan/<id>' => 'site/quanlytaikhoan',
				'san-pham' => 'site/loaisp',
				'lien-he' => 'site/lienhe',
				'giai-phap' =>'site/giaiphap',
				'tin-tuc/<alias>' => 'site/Chitiet' ,
				'loai-tin/<alias>' => 'site/loaitin',
				'loai-tin' => 'site/loaitin',

				'rao-vat' => 'site/raovat',
				'rao-vat/<alias>' => 'site/xemraovat',
				'khach-hang' => 'site/khachhang',
				'khach-hang/<alias>' => 'site/khachhang',
				'sp/<alias>' => 'site/sanpham',
				'loai-san-pham/<alias>' => 'site/loaisp',

				'lien-he' =>'site/lienhe',
				'Languagechange/<lang>' => 'site/languagechange',

				'admin/them-slide' =>'admin/slide/create',
				'admin/quan-ly-slide' =>'admin/slide/admin',
				'admin/sua-slide' =>'admin/slide/update',

				'admin/quan-ly-ban-quan-tri' => 'admin/quantri/admin',
				'admin/them-ban-quan-tri' => 'admin/quantri/create',
				'admin/sua-ban-quan-tri/<id:\d+>' => 'admin/quantri/update',
				'admin/sua-thong-tin-tai-khoan' => 'admin/quantri/suataikhoan',
				'gioi-thieu' =>'site/gioithieu',
				'video' => 'site/video',
				'video/<alias>' => 'site/viewclip',
				'bai-viet/<alias>' =>'site/chitiet',
				//admin
				'admin/quan-ly-thumbnails' => 'admin/thumbnails/admin',
				'admin/them-thumbnails' => 'admin/thumbnails/create',

				'admin/them-video' =>'admin/video/create',
				'admin/quan-ly-video' =>'admin/video/admin',
				'admin/sua-video' =>'admin/video/update',

				'admin/them-slide' =>'admin/slide/create',
				'admin/quan-ly-slide' =>'admin/slide/admin',
				'admin/sua-slide' =>'admin/slide/update',

				'admin/quan-ly-dat-ve' =>'admin/book/admin',

				'admin/them-quang-cao' =>'admin/quangcao/create',
				'admin/quan-ly-quang-cao' =>'admin/quangcao/admin',
				'admin/sua-quang-cao/<id>' =>'admin/quangcao/update',


				'admin/quan-ly-nhan-bao-gia' =>'admin/baogia/admin',
				'admin/xem-bao-gia/<id>' =>'admin/baogia/view',

				'admin/them-gioi-thieu' =>'admin/gioithieu/create',
				'admin/quan-ly-gioi-thieu' =>'admin/gioithieu/admin',
				'admin/sua-gioi-thieu/<id>' =>'admin/gioithieu/update',

				'admin/quan-ly-cam-nhan-khach-hang' => 'admin/camnhankhachhang/admin',
				'admin/sua-cam-nhan-khach-hang/<id>' => 'admin/camnhankhachhang/update',
				'admin/them-cam-nhan-khach-hang' =>'admin/camnhankhachhang/create',

				'admin/cap-nhat-trang-giai-phap' => 'admin/gioithieu/update1',


				'admin/cap-nhat-thong-tin' => 'admin/thongtinchung/update',

				'admin/cau-hinh' => 'admin/cauhinh/update',

				'admin/quan-ly-loai-san-pham' => 'admin/loaisanphamLang/admin',
				'admin/them-loai-san-pham' => 'admin/loaisanphamLang/create',
				'admin/sua-loai-san-pham/<id>' => 'admin/loaisanphamLang/update',

                'admin/quan-ly-trang-don' => 'admin/singlePage/admin',
                'admin/them-trang-don' => 'admin/singlePage/create',
                'admin/sua-trang-don/<id>' => 'admin/singlePage/update',

				'admin/quan-ly-loai-quang-cao' => 'admin/loaiquangcao/admin',
				'admin/them-loai-quang-cao' => 'admin/loaiquangcao/create',
				'admin/sua-loai-quang-cao/<id>' => 'admin/loaiquangcao/update',

                'admin/thiet-lap-video' => 'admin/videoSetting/update',

                'admin/quan-ly-loai-video' => 'admin/videoCategory/admin',
                'admin/them-loai-video'    => 'admin/videoCategory/create',
                'admin/sua-loai-video/<id>'=> 'admin/videoCategory/update',

                'admin/quan-ly-hinh-anh' => 'admin/hinhanh/admin',
                'admin/sua-hinh-anh/<id>' => 'admin/hinhanh/update',
                'admin/them-hinh-anh/<id>' => 'admin/hinhanh/create',

                'admin/cap-nhat-footer' => 'admin/footer/update',

				'admin/quan-ly-san-pham' => 'admin/sanpham/admin',
				'admin/them-san-pham' => 'admin/sanpham/create',
				'admin/sua-san-pham/<id>' => 'admin/sanpham/update',

				'admin/quan-ly-tags' => 'admin/tags/admin',
				'admin/them-tags' => 'admin/tags/create',
				'admin/sua-tags/<id>' => 'admin/tags/update',

				'admin/quan-ly-binh-luan' => 'admin/binhluan/admin',
				'admin/them-binh-luan' => 'admin/binhluan/create',
				'admin/sua-binh-luan/<id>' => 'admin/binhluan/update',

				'admin/quan-ly-tin-tuc' => 'admin/tintuc/admin',
				'admin/sua-tin-tuc/<id>' => 'admin/tintuc/update',
				'admin/them-tin-tuc' =>'admin/tintuc/create',

				'admin/quan-ly-khach-hang' => 'admin/khachhang/admin',
				'admin/sua-khach-hang/<id>' => 'admin/khachhang/update',
				'admin/them-khach-hang' =>'admin/khachhang/create',

				'admin/quan-ly-loai-tin' => 'admin/loaitin/admin',
				'admin/sua-loai-tin/<id>' => 'admin/loaitin/update',
				'admin/them-loai-tin' =>'admin/loaitin/create',

				'admin/quan-ly-nguoi-dung' => 'admin/naogia/admin',
				'admin/sua-nguoi-dung/<id>' => 'admin/nguoithue/update',
				'admin/them-nguoi-dung' =>'admin/nguoithue/create',

				'admin/quan-ly-loai-gioi-thieu' => 'admin/loaigioithieu/admin',
				'admin/sua-loai-gioi-thieu/<id>' => 'admin/loaigioithieu/update',
				'admin/them-loai-gioi-thieu' =>'admin/loaigioithieu/create',
				'admin/them-slide' =>'admin/slide/create',
				'admin/quan-ly-slide' =>'admin/slide/admin',
				'admin/sua-slide' =>'admin/slide/update',
				'admin/quan-ly-loai-khach-hang' => 'admin/loaikhachhang/admin',
				'admin/sua-loai-khach-hang/<id>' => 'admin/loaikhachhang/update',
				'admin/them-loai-khach-hang' =>'admin/loaikhachhang/create',
				'dang-xuat'=>'site/logout',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),*/

			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'leanh.stu93@gmail.com',
		'company_name' =>'Autotrader',
		'appid' => '405345616337756',
        'settingTemplate' => require(dirname(__FILE__).'/settingTemplate.php')
	),
);
