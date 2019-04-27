<!-- Start Page Header -->

<div class="page-header">
    <h1 class="title">Quản lý tài khoản</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
      
        <li class="active">Chỉnh sửa thông tin tài khoản</li>
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
                    <h1>Chỉnh sửa mới thông tin tài khoản</h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <?php $this->renderPartial('_form1', array('model'=>$model)); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->

</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 