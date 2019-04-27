<div class="container-widget">
<h1><a style="color:black;font-weight: 100;" id="back-dh" class="fa fa-chevron-left" title="" href="#"><img src="" alt=""></a>  Đơn hàng chi tiết</h1>

<div>
  <p><span>Tiêu đề:</span><?php echo $model->TieuDe ?></p> 
  <p><span>Ngôn ngữ:</span><?php echo Common::getOneRecord("ngonngu","NgonNgu","id = ".$model->idNgonNgu); ?></p> 
  <p><span>Loại tin:</span><?php echo Common::getOneRecord("loaitin","name","id = ".$model->idLoai); ?></p> 
  <p><span>Hình ảnh:</span><?php echo $model->UrlHinh ?></p> 
  <p><span>Mô tả:</span><?php echo $model->MoTa ?></p> 
  <p><span>Nội dung:</span><?php echo $model->NoiDung ?></p> 
</div>
<style type="text/css">
table.cl1, th, td {
    border: 0px solid rgb(162, 156, 156);
}
</style>
</div>
<script type="text/javascript">
$(function(){
	$("#back-dh").click(function(){
	$("#content").load(window.location.origin+"/thuexe/admin/tintuc/admin2");
})
})
</script>
<?php die(); ?>