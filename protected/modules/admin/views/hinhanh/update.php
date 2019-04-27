<!-- Start Page Header -->

<div class="page-header">
    <h1 class="title">Quản lý hình ảnh</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li><a href="<?php echo Yii::app()->homeUrl ?>admin/quan-ly-hinh-anh.html">Quản lý hình ảnh</a></li>
        <li class="active">Chỉnh sửa mới quảng cáo</li>
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
                    <h1>Chỉnh sửa mới hình ảnh</h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <?php 
                    $hinhanh = HinhanhLang::model()->find("idNgonNgu = 1 and idHinhAnh = $model->id");
                    $hinhanh_ = HinhanhLang::model()->find("idNgonNgu = 2 and idHinhAnh = $model->id");
                    $this->renderPartial('_form', array('model'=>$model,'hinhanh'=>$hinhanh,'hinhanh_'=>$hinhanh_)); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->

</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 