<?php
/* @var $this NncmsNguoidungController */
/* @var $model NncmsNguoidung */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idNguoiDung'); ?>
		<?php echo $form->textField($model,'idNguoiDung'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TenTaiKhoan'); ?>
		<?php echo $form->textField($model,'TenTaiKhoan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MatKhau'); ?>
		<?php echo $form->textField($model,'MatKhau',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HoTen'); ?>
		<?php echo $form->textField($model,'HoTen',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DienThoai'); ?>
		<?php echo $form->textField($model,'DienThoai',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DiaChi'); ?>
		<?php echo $form->textField($model,'DiaChi',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NgaySinh'); ?>
		<?php echo $form->textField($model,'NgaySinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GioiTinh'); ?>
		<?php echo $form->textField($model,'GioiTinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NgayDangKy'); ?>
		<?php echo $form->textField($model,'NgayDangKy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idNhom'); ?>
		<?php echo $form->textField($model,'idNhom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KichHoat'); ?>
		<?php echo $form->textField($model,'KichHoat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MaNgauNhien'); ?>
		<?php echo $form->textField($model,'MaNgauNhien',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DiemSMS'); ?>
		<?php echo $form->textField($model,'DiemSMS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->