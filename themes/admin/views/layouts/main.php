<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
              content="admin">
        <meta name="keywords"
              content="admin" />
        <title>Admin Web Application</title>

        <!-- ========== Css Files ========== -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/css/root.css"
              rel="stylesheet">
              

              
        <!-- ================================================
        jQuery Library
        ================================================ -->
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/jquery.min.js"></script>
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/popup.js"></script>
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/main2.js"></script>
    </head>
    <body>
        <!-- Start Page Loading -->
        <div class="loading">
            <img src="<?php echo yii::app()->theme->baseurl ?>/images/loading.gif"
                 alt="loading-img">
        </div>
        <!-- End Page Loading -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START TOP -->
        <div id="top" class="clearfix">

            <!-- Start App Logo -->
            <div class="applogo">
                <a href="/" class="logo">
                    <?php 
                    $ttc = Thongtinchung::model()->find("id = 1");
                    if($ttc->Logo == "")
                    { 
                     ?>
                    <img
                        src="<?php echo yii::app()->theme->baseurl ?>/images/vnetcom.png"
                        width="150" >
                        <?php }
                        else
                        { ?>
                      <img
                        src="<?php echo $ttc->Logo ?>"
                        width="150" >
                        <?php }
                         ?>
                    </a>
            </div>
            <!-- End App Logo -->

            <!-- Start Sidebar Show Hide Button -->
            <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
            <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
            <!-- End Sidebar Show Hide Button -->


            <!-- End Searchbox -->

            <!-- Start Top Menu -->
            <ul class="topmenu">
                <li><a href="/">Trang chủ</a></li>

            </ul>
            <!-- End Top Menu -->

            <!-- Start Sidepanel Show-Hide Button -->
            <!-- End Sidepanel Show-Hide Button -->

            <!-- Start Top Right -->
            <ul class="top-right">





                <li class="dropdown link"><a href="#" data-toggle="dropdown"
                                             class="dropdown-toggle profilebox"><img
                            src="<?php echo yii::app()->theme->baseurl ?>/images/profileimg2.png"
                            alt="img"><b><?php echo Yii::app()->user->name ?></b><span
                            class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">

                        <li><a href="/dang-xuat.html"><i class="fa falist fa-power-off"></i>
                                Đăng xuất</a></li>
                        <li><a href="<?php echo Yii::app()->homeUrl ?>admin/sua-thong-tin-tai-khoan.html"><i class="fa falist fa-edit"></i>
                                Sữa thông tin tài khoản</a></li>
                    </ul></li>

            </ul>
            <!-- End Top Right -->

        </div>
        <!-- END TOP -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START SIDEBAR -->
        <div class="sidebar clearfix">

            <ul class="sidebar-panel nav">
                <li class="sidetitle">QUẢN LÝ WEBSITE</li>
                <li><a  class="active" href="<?php echo Yii::app()->homeUrl ?>admin"><span class="icon color5"><i class="fa fa-home"></i></span>Quản
                        lý chung</a></li>

            </ul>

            <ul class="sidebar-panel nav">
                <li class="sidetitle">QUẢN LÝ CHỨC NĂNG</li> 

               <li class="cntt"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/cap-nhat-thong-tin.html"><span class="icon color9"><i class="fa fa-list-alt"></i></span> Thông tin công ty </a></li>

               <li class="cntt"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-gioi-thieu.html"><span class="icon color9"><i class="fa fa-list-alt"></i></span> Quản lý giới thiệu </a></li>

                <li class="qlbl"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-loai-san-pham.html"><span class="icon color15"><i
                                class="fa fa-list-alt"></i></span>Quản lý loại sản phẩm  </a></li>

                <li class="qlbl"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-san-pham.html"><span class="icon color15"><i
                                class="fa fa-list-alt"></i></span>Quản lý sản phẩm  </a></li> 

                <li class="qlbl"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-loai-tin.html"><span class="icon color15"><i
                        class="fa fa-list-alt"></i></span>Quản lý loại tin  </a></li>

                <li class="qlbl"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-tin-tuc.html"><span class="icon color15"><i
                        class="fa fa-list-alt"></i></span>Quản lý tin tức  </a></li>
                <li class="qlqc"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-video.html"><span class="icon color15"><i
                        class="fa fa-list-alt"></i></span>Quản lý video  </a></li>
                <li class="qlbl"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-slide.html"><span class="icon color15"><i
                        class="fa fa-list-alt"></i></span>Quản lý slide  </a></li>    
                <li class="qlqc"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-quang-cao.html"><span class="icon color15"><i
                                class="fa fa-list-alt"></i></span>Quản lý quảng cáo  </a></li> 
                <li class="qlqc"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-hinh-anh.html"><span class="icon color15"><i
                                class="fa fa-list-alt"></i></span>Quản lý hình ảnh  </a></li> 
                                
                 <li class="qlqt"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-ban-quan-tri.html"><span class="icon color9"><i class="fa fa-list-alt"></i></span>Quản lý ban quản trị</a></li> 
                 <?php 
                $criteria = new CDbCriteria();
                //$criteria->with ="gioithieu_lang";
                $criteria->condition = "TinhTrang = 0";
                $dh = NncmsDonhang::model()->count($criteria);
                  ?> 
                 <li class="qlqt"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/quan-ly-don-hang.html"><span class="icon color9"><i class="fa fa-list-alt"></i><span class="count-dh <?php echo $dh > 0 ? 'active' : '' ?>"><?php echo $dh ?></span></span>Quản lý đơn hàng  </a></li> 
                 <style type="text/css">
                    .count-dh{
                            font-size: 90%;
                            width: 20px;
                            height: 20px;
                            background: red;
                            color: white;
                            display: none;
                            border-radius: 50%;
                            text-align: center;
                            line-height: 20px;
                            font-weight: bold;
                            position: relative;
                            top: -29px;
                            left: -10px;
                     }
                    .count-dh.active{display: inline-block;}
                 </style> 
                 <li class="ch"><a href="<?php echo Yii::app()->request->baseUrl ?>/admin/cau-hinh.html"><span class="icon color9"><i class="fa fa-list-alt"></i></span>Cấu hình</a></li>             

            </ul>


        </div>
        <!-- END SIDEBAR -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <div class="content">



            <?php echo $content; ?>


            <!-- Start Footer -->
            <div class="row footer">
                <div class="col-md-6 text-left">
                    Copyright © 2015 <a href="#" target="_blank">mexitaco.vn</a> All
                    rights reserved.
                </div>
                <div class="col-md-6 text-right">
                    Design and Developed by <a href="#" target="_blank">mexitaco.vn</a>
                </div>
            </div>
            <!-- End Footer -->

        </div>
        <!-- End Content -->
        <!-- popup -->
        <div class="popupduyet">
    <div class="generic_dialog_popup">
        <h2 class="dialog_title" id="title_dialog_0"><span>Ghi chú</span></h2>
       
       <div class="div-textarea"> <textArea name="ghichu" rows="5"></textArea></div>
              <hr>
     <button class="btn save">Lưu</button>
   </div>

</div>
<div class="divche"></div>
 <!-- end popup -->



        <!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
        <script
        src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap.min.js"></script>

        <!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/plugins.js"></script>

        <!-- ================================================
Bootstrap Select
================================================ -->
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap-select.js"></script>

        <!-- ================================================
Bootstrap Toggle
================================================ -->
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap-toggle.min.js"></script>

        <!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
        <!-- main file -->
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/wysihtml5-0.3.0.min.js"></script>
        <!-- bootstrap file -->
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/bootstrap-wysihtml5.js"></script>

        <!-- ================================================
Summernote
================================================ -->
        <script type="text/javascript"
        src="<?php echo yii::app()->theme->baseurl ?>/js/summernote.min.js"></script>



        <!-- ================================================
Sweet Alert
================================================ -->
        <script
        src="<?php echo yii::app()->theme->baseurl ?>/js/sweet-alert.min.js"></script>

        <!-- ================================================
Kode Alert
================================================ -->
        <script type="text/javascript"
        src="<?php echo Yii::app()->request->baseUrl ?>/assets/84fd9d08/jquery.js"></script>
        <script type="text/javascript"
        src="<?php echo Yii::app()->request->baseUrl ?>/assets/84fd9d08/jquery.ba-bbq.js"></script>



    </body>
</html>
<?php
/*
if(Yii::app()->controller->id == 'binhluan') 
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlbl a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'donhang')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qldh a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'ketquagiaodich')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.kqgd a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'loaitin')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qllt a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'loaidanhgiaxe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlldgx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'loaidanhgiachuxe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlldgcx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'mucdichthuexe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlmdtx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'ngaychothuexe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlnctx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'nguoichothue')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlnct a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'nguoithue')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlnt a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'quantri')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlqt a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'role')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlr a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'tintuc')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qltt a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'xe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'danhgiaxe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qldgx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'dongxe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qldx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'danhgiachuxe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qldgcx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'phienban')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qlpb a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'dulieuxe')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.qldlx a").addClass("active");</script>';
elseif(Yii::app()->controller->id == 'gioithieu')
    echo '<script type="text/javascript">
$(".sidebar-panel li a").removeClass("active");
$(".sidebar-panel li.cntt a").addClass("active");</script>';
else echo"";
?>
