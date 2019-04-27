<!-- Start Page Header -->

<div class="page-header">
    <h1 class="title">Cập nhật giới thiệu</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li><a href="<?php echo Yii::app()->homeUrl ?>admin/quan-ly-gioi-thieu.html">Quản lý giới thiệu</a></li>
        <li class="active">Chỉnh sửa giới thiệu</li>
    </ol>
</div>
<!-- End Page Header -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="container-widget">

    <!-- Start Fourth Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-title">
                    <h1>Chỉnh sửa mới giới thiệu</h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                   <?php 
                    $gt = GioithieuLang::model()->find("idGioiThieu = $model->id and idNgonNgu = 1");
                    $gt_ = GioithieuLang::model()->find("idGioiThieu = $model->id and idNgonNgu = 2");
                    $this->renderPartial('_form', array('model'=>$model,'gt'=>$gt,'gt_'=>$gt_,)); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->

</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 