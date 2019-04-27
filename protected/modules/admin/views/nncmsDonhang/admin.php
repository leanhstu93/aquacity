<style type="text/css">
    .wrp-btn{width: 100%;float:     left;margin-bottom: 1%}
    .wrp-btn button{outline: none;}

</style>
<!-- Start Page Header -->
<div class="page-header">
    <h1 class="title">Quản lý đơn hàng</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Home</a></li>
        <li class="active">Quản lý đơn hàng </li>
    </ol>
</div>
<!-- End Page Header -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->

<div class="container-widget">
    <div class="wrp-btn">
    <button class="btncapnhat">
        <a href="?capnhat=1">
            Cập nhật
        </a>
    </button>
    <button>
        <a href="?capnhat=0">
            Ngừng cập nhật
        </a>
    </button>
</div>
    <!-- Start Fourth Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default ad-qllt">
                <div class="panel-title">
                    <h1>Quản lý đơn hàng</h1>
                    <ul class="panel-tools">
                        <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    </ul>
                </div>
                <div class="panel-body table-responsive">
                    <div id="example0_wrapper" class="dataTables_wrapper">

                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'post-grid',
                            'dataProvider' => $model->search(),
                            'filter' => $model,
                            'columns' => array(
                                array(
                                    'header' => 'STT',
                                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                                ),
                                 array(
                                    'name' => 'idDH',
                                    ),
                               array(
                                    'name' => 'TenNguoiNhan',
                                    ),
                               array(
                                    'name' => 'nncms_nguoidung.DienThoai',
                                    'filter' => CHtml::textField('DienThoai', Yii::app()->request->getParam('DienThoai')),
                                    ),
                                 array(
                                    'name'=>'DiaDiemGiao',
                                    ),
                                 /*
                                 array(
                                    'name'=>'TinhTrang',
                                    'type'=>'raw',
                                    'value'=>'$data->TinhTrang == 0 ? "<span style=\"color:red;font-size:22px\" state=\"1\" idDH=\"$data->idDH\" class=\"fa fa-close xldh\" ></span>":"<span style=\"color:#399bff;font-size:22px\" state=\"0\" idDH=\"$data->idDH\" class=\"fa fa-check xldh\" ></span>"',
                                    'filter'=>array(1=>'Có',0=>'Không')
                                    ),
                                    */
                                array(
                                    'name' => 'TinhTrang',
                                   'filter' => array(
                                            '0' => 'Chưa xử lý',
                                            '1' => 'Đang xử lý',
                                            '2' => 'Hoàn tất',
                                            '3' => 'Hủy'
                                    ),
                                   'value' => '$data->getTinhTrang($data->TinhTrang)'
                                    ),
                                array(
                                    'class' => 'CButtonColumn',
                                    'template' => '{update}{delete}',
                                    'buttons' => array(
                                        'update' => array(
                                            'label' => '',
                                            'imageUrl' => '',
                                            'options' => array('class' => 'fa fa-edit'),
                                            'url' =>'Yii::app()->homeUrl."admin/xem-don-hang/".$data->idDH.".html"'
                                        ),
                                        'delete' => array(
                                            'label' => '',
                                            'imageUrl' => '',
                                            'url'=>'Yii::app()->homeUrl."admin/donhang/delete/idDH/".$data->idDH.".html"',
                                            'options' => array('class' => 'fa fa-trash-o'),
                                            'click' => 'function() {
                                                    var url = jQuery(this).attr("href");
                                                    swal({
                                                        title: "Bạn có chắc muốn xóa?",
                                                        text: "Bạn sẽ không thể khôi phục tập tin này!",
                                                        type: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#DD6B55",
                                                        confirmButtonText: "Vâng, tôi muốn xóa!",
                                                        closeOnConfirm: false
                                                    },
                                                    function(){
                                                            var th = this,
                                                            afterDelete = function(){};
                                                            jQuery("#post-grid").yiiGridView("update", {
                                                                type: "POST",
                                                                url: url,
                                                                success: function(data) {
                                                                    jQuery("#post-grid").yiiGridView("update");
                                                                    afterDelete(th, true, data);
                                                                    swal("Đã xóa!", "Thông tin đã bị xóa.", "success");
                                                                },
                                                                error: function(XHR) {
                                                                    swal("Xảy ra lỗi!", "Liên hệ admin để khắc phục.", "error");
                                                                    return afterDelete(th, false, XHR);
                                                                }
                                                            });
                                                            return false;
                                                    });
                                                    return false;
                                                }',
                                        ),
                                    ),
                                ),
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fourth Row -->
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<script type="text/javascript">
    $(function(){
        $(".xldh").click(function(event) {
            /* Act on the event */
            var state = $(this).attr("state");
            var idDH = $(this).attr("idDH");
            var html = $(this);
            $($.ajax({
                url: '/admin/xldh/'+idDH,
                type: 'post',
                dataType: 'json',
                data: {state: state},
                success : function(result){
                        if(result.result == 1){
                            if(state == 1){
                                 html.addClass('fa-check');
                                html.removeClass('fa-close');
                                html.attr("state",0);
                                html.css({color: '#399bff', });
                            }
                            else{  
                                html.addClass('fa-close');
                                html.removeClass('fa-check');
                                html.attr("state",1);
                                html.css({color: 'red', });
                            }
                        }
                            return false;
                    },
            }))
        });
    })
</script>
<?php if(@$_GET['capnhat']=="1"){
?>
<script type="text/javascript">    
window.onload = Refresh;
    function Refresh() {
        setTimeout("refreshPage();", 30000);
    }
</script>
<script type="text/javascript">    
    function refreshPage() {
        window.location = location.href;
    }
</script>
<?php } ?>