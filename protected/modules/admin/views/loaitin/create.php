<!-- Start Page Header -->

<div class="page-header">
    <h1 class="title">Quản lý loại tin</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li><a href="<?php echo Yii::app()->homeUrl ?>admin/quan-ly-loai-tin.html">Quản lý loại tin</a></li>
        <li class="active">Thêm loại tin</li>
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
                    <h1>Thêm mới loại tin</h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <?php 
                     $lt_=new LoaitinLang;
                    $lt= new LoaitinLang;   
                    $this->renderPartial('_form', array('lt'=>$lt,'lt_'=>$lt_,'model'=>$model,"parent" => 0,"id"=>null)); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->

</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 