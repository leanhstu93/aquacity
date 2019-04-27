<!-- Start Page Header -->

<div class="page-header">
    <h1 class="title">Quản lý quảng cáo</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li><a href="<?php echo Yii::app()->homeUrl ?>admin/quan-ly-quang-cao.html">Quản lý quảng cáo</a></li>
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
                    <h1>Chỉnh sửa mới quảng cáo</h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <?php
                     $model= Quangcao::model()->find("Type = 0");
                    $model_= Quangcao::model()->find("Type = 1");
                     $this->renderPartial('_form', array('model'=>$model,'model_'=>$model_)); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->

</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 