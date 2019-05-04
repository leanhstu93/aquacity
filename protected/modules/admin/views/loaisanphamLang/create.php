<!-- Start Page Header -->

<div class="page-header">
    <h1 class="title">Quản lý loại sản phẩm</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li><a href="<?php echo Yii::app()->homeUrl ?>admin/quan-ly-loai-san-pham.html">Quản lý loại sản phẩm</a></li>
        <li class="active">Thêm loại sản phẩm</li>
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
                    <h1>Thêm mới loại sản phẩm</h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <?php 
                    $lsp = new LoaisanphamLang;
                    $lsp_= new LoaisanphamLang;  
                    $this->renderPartial('_form', array('lsp_'=>$lsp_,'lsp'=>$lsp,'model'=>$model,"parent" => 0,"id"=>null)); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->

</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 