<!-- Start Page Header --><div class="page-header">    <h1 class="title">Quản lý trang đơn</h1>    <ol class="breadcrumb">        <li><a href="/admin">Home</a></li>        <li><a href="<?php echo Yii::app()->homeUrl ?>admin/quan-ly-trang-don.html">Quản lý trang đơn</a></li>        <li class="active">Chỉnh sửa trang đơn</li>    </ol></div><!-- End Page Header --><!-- //////////////////////////////////////////////////////////////////////////// --><!-- START CONTAINER --><div class="container-widget">    <!-- Start Fourth Row -->    <div class="row">        <div class="col-md-12">            <div class="panel panel-default">                <div class="panel-title">                    <h1>Chỉnh sửa mới trang đơn</h1>                    <ul class="panel-tools">                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>                    </ul>                </div>                <div class="panel-body">                    <?php                                         $this->renderPartial('_form', array('model'=>$model,'alias' => $alias)); ?>                </div>            </div>        </div>    </div>    <!-- End Fourth Row --></div><!-- END CONTAINER --><!-- //////////////////////////////////////////////////////////////////////////// --> 