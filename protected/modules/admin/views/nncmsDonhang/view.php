<style type="text/css">
	.wrap{background:white;padding: 2%;margin: 1% 0}
	table.detail-view tr.odd {
    background: #fdb3d5;
}
</style>
<?php
/* @var $this NncmsDonhangController */
/* @var $model NncmsDonhang */

$this->breadcrumbs=array(
	'Nncms Donhangs'=>array('index'),
	$model->idDH,
);

$this->menu=array(	
	array('label'=>'Quản lý đơn hàng', 'url'=>array('admin')),
);
$nguoidung=NncmsNguoidung::model()->find("idNguoiDung = ".$model->idNguoiDung."");
?>
<div class="w100 wrap">
<h1>Xem đơn hàng #<?php echo $model->idDH; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idDH',
		'TenNguoiNhan',
		'nncms_nguoidung.DienThoai',
		array(
			'name' =>'ThoiGianDat',
			'value' => date("d/m/Y h:m:s",$model->ThoiGianDat),
		),
		array(
			'name' =>'Email',
			'value' =>$nguoidung->Email,
		),
		'DiaDiemGiao',
	),
)); ?>
</div>
<div class="w100 wrap">
<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'nncms-donhang-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>
		<div class="row form-group">
			<?php echo $form->labelEx($model,'GhiChu',array('class' => 'col-sm-2 control-label form-label')); ?>
			<div class="col-sm-6">
				<?php echo $form->textArea($model,'GhiChu',array('class'=>'form-control col-sm-6','rows'=>5)); ?>
			</div>
			<?php echo $form->error($model,'GhiChu'); ?>
		</div>
		<div class="row form-group">
			<?php echo $form->labelEx($model,'TinhTrang',array('class' => 'col-sm-2 control-label form-label')); ?>
			<div class="col-sm-6">
				<?php $drow = array('0'=>'Chưa xử lý', '1' => 'Đang xử lý', '2' => 'Hoàn Tất', '3' => 'Hủy'); ?>
				<?php echo $form->dropDownList($model,'TinhTrang',$drow,array('class'=>'form-control col-sm-6','rows'=>5)); ?>
			</div>
		</div>
		<div class="row buttons form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'view' : 'Save'); ?>
			</div>
		</div>
	<?php $this->endWidget(); ?>
</div><!-- form -->
</div>
<div class="w100 wrap">
<table width="100%">
	<thead>
		<td>
			STT
		</td>
		<td>
			Sản phẩm
		</td>
		<td>
			Số lượng
		</td>
		<td>
			Hình Ảnh
		</td>
		<td>
			Giá
		</td>
		<td>
			Tổng tiền
		</td>
	</thead>
	<tbody>
		<?php
		$dhct = NncmsDonhangchitiet::model()->findAll("idDH =".$model->idDH);
		$i = 0;
		foreach ($dhct as $key => $value) {
			$i++;
			$criteria = new CDbCriteria();
	        $criteria->with="sanpham_lang";
	        $criteria->condition = "idNgonNgu = 1 and t.id = ".$value->idSP;
			$sp = Sanpham::model()->find($criteria);
		?>
		<tr>
			<td>
				<?php echo $i; ?>
			</td>
			<td>
				<?php echo $sp->sanpham_lang->Name ?>
			</td>
			<td>
				<?php echo $value->SoLuong ?>
			</td>
			<td>
				<img width="50px" src="<?php echo $sp->UrlImage ?>">
			</td>
			<td>
				<?php echo number_format($sp->Gia) ?>
			</td>
			<td>
				<?php echo number_format($value->Gia) ?>
			</td>
		<tr>
		<?php } ?>
	</tbody>
</table>
</div>
<style type="text/css">
	.detail-view{margin-bottom: 3% !important}
</style>