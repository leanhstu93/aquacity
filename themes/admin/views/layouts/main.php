<!DOCTYPE html><html lang="en"><head>    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="description" content="admin">    <meta name="keywords" content="admin"/>    <title>Admin Web Application</title>    <!-- ========== Css Files ========== -->    <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/root.css" rel="stylesheet">    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/jquery.min.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/popup.js"></script></head><body><!-- Start Page Loading --><div class="loading">    <img src="<?php echo yii::app()->theme->baseurl ?>/images/loading.gif"  alt="loading-img"></div><div id="top" class="clearfix">    <!-- Start App Logo -->    <div class="applogo">        <a href="/" class="logo">            <?php            $ttc = Thongtinchung::model()->find("id = 1");            if ($ttc->Logo == "") {                ?>                <img src="<?php echo yii::app()->theme->baseurl ?>/images/vnetcom.png"                        width="150">            <?php } else { ?>                <img  src="<?php echo $ttc->Logo ?>"  width="114">            <?php }            ?>        </a>    </div>    <!-- End App Logo -->    <!-- Start Sidebar Show Hide Button -->    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>    <ul class="topmenu">        <li><a href="/">Trang chủ</a></li>    </ul>    <ul class="top-right">        <li class="dropdown link">            <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox">                <img src="<?php echo yii::app()->theme->baseurl ?>/images/profileimg2.png"                     alt="img"><b><?php echo Yii::app()->user->name ?></b>\                <span  class="caret"></span></a>            <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">                <li><a href="/dang-xuat.html"><i class="fa falist fa-power-off"></i>                        Đăng xuất</a></li>                <li><a href="<?php echo Yii::app()->homeUrl ?>admin/sua-thong-tin-tai-khoan.html"><i                                class="fa falist fa-edit"></i>                        Sữa thông tin tài khoản</a></li>            </ul>        </li>    </ul>    <!-- End Top Right --></div><!-- END TOP --><!-- START SIDEBAR --><div class="sidebar clearfix">    <ul class="sidebar-panel nav">        <li class="sidetitle">QUẢN LÝ WEBSITE</li>        <li><a class="active" href="<?php echo Yii::app()->homeUrl ?>admin">                <span class="icon color5"><i class="fa fa-home"></i></span>Quản lý chung</a>        </li>    </ul>    <ul class="sidebar-panel nav">        <li class="sidetitle">QUẢN LÝ CHỨC NĂNG</li>        <li>            <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/cap-nhat-thong-tin.html">                <span class="icon color9"><i class="fa fa-list-alt"></i></span>                Thông tin công ty            </a>        </li>        <li>            <a href="#">                <span class="icon color9"><i class="fa fa-list-alt"></i></span>                Quản lý giao diện                <span class="caret"></span>            </a>            <ul>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/tuy-chinh-giao-dien.html">                        Tùy chỉnh giao diện                    </a>                </li>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/cap-nhat-footer.html">                        Cập nhật footer                    </a>                </li>            </ul>        </li>        <li class="qlbl">            <a href="#">                <span class="icon color15"><i class="fa fa-list-alt"></i></span>                Quản lý tin tức                <span class="caret"></span>            </a>            <ul>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-tin-tuc.html">                        Danh sách tin tức                    </a>                </li>                <li class="qlbl">                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-loai-tin.html">                        Danh sách loại tin                    </a>                </li>            </ul>        </li>        <li>            <a href="#">                <span class="icon color15"><i class="fa fa-list-alt"></i></span>                Quản lý hình ảnh                <span class="caret"></span>            </a>            <ul>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-loai-hinh-anh.html">                        Danh sách loại hình ảnh                    </a>                </li>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-hinh-anh.html">                        Danh sách hình ảnh                    </a>                </li>            </ul>        </li>        <?php        $criteria = new CDbCriteria();        //$criteria->with ="gioithieu_lang";        $criteria->condition = "Active = 0";        $dh = Baogia::model()->count($criteria);        $dh = !empty($dh) ? $dh : 0;        ?>        <li class="qlqc"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-nhan-bao-gia.html">                        <span class="icon color15"><i class="fa fa-list-alt"></i>                            <span class="count-dh <?php echo $dh > 0 ? 'active' : '' ?>">                                <?php echo $dh ?></span></span>Quản lý đăng ký tư vấn            </a>        </li>        <li>            <a href="#">                <span class="icon color15">                    <i class="fa fa-list-alt"></i>                </span>                Quản lý video                <span class="caret"></span>            </a>            <ul>                <li class="qlbl">                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/thiet-lap-video.html">                        Thiết lập video                    </a>                </li>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-loai-video.html">                        Danh sách loại video                    </a>                </li>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-video.html">                        Danh sách video                    </a>                </li>            </ul>        </li>        <li>            <a href="#">                <span class="icon color15">                    <i class="fa fa-list-alt"></i>                </span>                Quản lý trang đơn                <span class="caret"></span>            </a>            <ul>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-trang-don.html">                        Danh sách trang đơn                    </a>                </li>            </ul>        </li>        <li>            <a href="#">                <span class="icon color15"><i class="fa fa-list-alt"></i></span>                Quản lý dịch vụ                <span class="caret"></span>            </a>            <ul>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-loai-san-pham.html">                        Danh sách loại dịch vụ                    </a>                </li>                <li>                    <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-san-pham.html">                        Danh sách dịch vụ                    </a>                </li>            </ul>        </li>        <li class="qlqt"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-ban-quan-tri.html"><span                        class="icon color9"><i class="fa fa-list-alt"></i></span>Quản lý ban quản trị</a></li>        <li class="ch"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/cau-hinh.html"><span                        class="icon color9"><i class="fa fa-list-alt"></i></span>Cấu hình</a></li>    </ul></div><div class="content">    <style type="text/css">        .count-dh {            font-size: 90%;            width: 20px;            height: 20px;            background: red;            color: white;            display: none;            border-radius: 50%;            text-align: center;            line-height: 20px;            font-weight: bold;            position: relative;            top: -29px;            left: -10px;        }        .count-dh.active {            display: inline-block;        }        .gb_uc {            webkit-box-sizing: border-box;            box-sizing: border-box;            -webkit-border-radius: 50%;            border-radius: 50%;            height: 20px;            width: 20px;            font-size: 12px;            font-weight: bold;            line-height: 20px;            margin: 5px;            padding: 0 2px;            text-align: center;            background-color: #db4437;            color: #fff;            display: inline-block;        }    </style>    <?php echo $content; ?>    <!-- Start Footer -->        <div class="row footer">            <div class="col-md-6 text-left">                Copyright © 2015 <a href="#" target="_blank">ngoisaoxanh.com.vn</a> All rights reserved.            </div>            <div class="col-md-6 text-right">                Design and Developed by <a href="#" target="_blank">HDdesign</a>            </div>        </div>        <!-- End Footer -->    </div><!-- End Content --><!-- popup -->    <div class="popupduyet">        <div class="generic_dialog_popup">            <h2 class="dialog_title" id="title_dialog_0"><span>Ghi chú</span></h2>            <div class="div-textarea"><textArea name="ghichu" rows="5"></textArea></div>            <hr>            <button class="btn save">Lưu</button>        </div>    </div>    <div class="divche"></div><link href="<?php echo Yii::app()->theme->baseUrl ?>/css/custom.css" rel="stylesheet">    <script src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap.min.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/plugins.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap-select.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap-toggle.min.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/wysihtml5-0.3.0.min.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap-wysihtml5.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/summernote.min.js"></script>    <script src="<?php echo yii::app()->theme->baseurl ?>/js/sweet-alert.min.js"></script>    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/84fd9d08/jquery.js"></script>    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/84fd9d08/jquery.ba-bbq.js"></script>    <script type="text/javascript" src="<?php echo yii::app()->theme->baseurl ?>/js/base.js"></script></body></html>