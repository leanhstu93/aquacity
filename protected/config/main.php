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
		'application.extensions.*',
		'ext.yii-mail.YiiMailMessage',
		'ext.yiiext.components.shoppingCart.*',
	),
	
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		 'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'mail' => array(
                'class' => 'ext.yii-mail.YiiMail',
                'transportType'=>'smtp',
                'transportOptions'=>array(
                        'host'=>'smtp.gmail.com',
                        'username'=>'order@mexitaco.vn',
                        'password'=>'ouiwvemqwztytqvg',
                        'port'=>'465',   
                        'encryption'=>'ssl',                    
                ),
                'viewPath' => 'application.views.mail',   
                'logging' => true,

				'dryRun' => false
        ),
		'shoppingCart' => array(
		        'class' => 'ext.yiiext.components.shoppingCart.EShoppingCart',
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
	/*  'cache' => array(
            'class' => 'CMemCache',
            //'useMemcached'=>false,
            'servers' => array(
                array(
                    'host' => '127.0.0.1',
                    'port' => 11211,
                ),
            ),
        ),*/

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			 'urlFormat' => 'path',
            'showScriptName' => false,
            'urlSuffix' => '.html',
			'rules'=>array(
				'cart' => 'site/viewcart',
				'tim-kiem' => 'site/timkiem',
				'checkout' => 'site/checkout',
				'san-pham' => 'site/loaisp',
				'lien-he' => 'site/lienhe',
				'giai-phap' =>'site/giaiphap',
				'tin-tuc/<alias>' => 'site/tintuc' ,
				'loai-tin/<alias>' => 'site/loaitin',
				'loai-tin' => 'site/loaitin',
				'thu-vien-hinh-anh' => 'site/hinhanh',
				'mon/<alias>' => 'site/sanpham',
				'loai-san-pham/<alias>' => 'site/loaisp',
				'video' => 'site/video', 
				'gioi-thieu/<alias>' =>'site/gioithieu',
				'lien-he' =>'site/lienhe',
				'Languagechange/<lang>' => 'site/languagechange',

				'admin/quan-ly-ban-quan-tri' => 'admin/quantri/admin',
				'admin/them-ban-quan-tri' => 'admin/quantri/create',
				'admin/sua-ban-quan-tri/<id:\d+>' => 'admin/quantri/update',
				'admin/sua-thong-tin-tai-khoan' => 'admin/quantri/suataikhoan',
				'gioi-thieu' =>'site/gioithieu',
				'san-pham/<alias>' =>'sanpham/chitiet',
				//admin
				'admin/quan-ly-thumbnails' => 'admin/thumbnails/admin',
				'admin/them-thumbnails' => 'admin/thumbnails/create',
				
				'admin/them-slide' =>'admin/slide/create',
				'admin/quan-ly-slide' =>'admin/slide/admin',
				'admin/sua-slide' =>'admin/slide/update',

				'admin/them-gioi-thieu' =>'admin/gioithieu/create',
				'admin/quan-ly-gioi-thieu' =>'admin/gioithieu/admin',
				'admin/sua-gioi-thieu/<id>' =>'admin/gioithieu/update',

				
				'admin/quan-ly-gioi-thieu' =>'admin/gioithieu/admin',
				'admin/sua-gioi-thieu/<id>' =>'admin/gioithieu/update',

				'admin/them-quang-cao' =>'admin/quangcao/create',
				'admin/quan-ly-quang-cao' =>'admin/quangcao/admin',
				'admin/sua-quang-cao/<id>' =>'admin/quangcao/update',

				'admin/them-hinh-anh' =>'admin/hinhanh/create',
				'admin/quan-ly-hinh-anh' =>'admin/hinhanh/admin',
				'admin/sua-hinh-anh/<id>' =>'admin/hinhanh/update',

				'admin/cap-nhat-thong-tin' => 'admin/thongtinchung/update',

				'admin/cau-hinh' => 'admin/cauhinh/update',
				
				'admin/quan-ly-loai-san-pham' => 'admin/LoaisanphamLang/admin',
				'admin/them-loai-san-pham' => 'admin/LoaisanphamLang/create',
				'admin/sua-loai-san-pham/<id>' => 'admin/LoaisanphamLang/update',

				'admin/quan-ly-san-pham' => 'admin/sanpham/admin',
				'admin/them-san-pham' => 'admin/sanpham/create',
				'admin/sua-san-pham/<id>' => 'admin/sanpham/update',

				'admin/quan-ly-don-hang' => 'admin/nncmsDonhang/admin',
				'admin/xldh/<id>' => 'admin/nncmsDonhang/update',
				'admin/xem-don-hang/<id>' => 'admin/nncmsDonhang/view',
				
				'admin/quan-ly-tin-tuc' => 'admin/tintuc/admin',
				'admin/sua-tin-tuc/<id>' => 'admin/tintuc/update',
				'admin/them-tin-tuc' =>'admin/tintuc/create',

				'admin/quan-ly-loai-tin' => 'admin/loaitin/admin',
				'admin/sua-loai-tin/<id>' => 'admin/loaitin/update',
				'admin/them-loai-tin' =>'admin/loaitin/create',

				'admin/them-video' =>'admin/video/create',
				'admin/quan-ly-video' =>'admin/video/admin',
				'admin/sua-video' =>'admin/video/update',

				'admin/quan-ly-loai-gioi-thieu' => 'admin/loaigioithieu/admin',
				'admin/sua-loai-gioi-thieu/<id>' => 'admin/loaigioithieu/update',
				'admin/them-loai-gioi-thieu' =>'admin/loaigioithieu/create',

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
		'adminEmail'=>'contact@muasamdongho.com',
		'company_name' =>'Autotrader',
		'appid' => '405345616337756',
	),
);
