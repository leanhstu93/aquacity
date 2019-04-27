<?php
/* @var $this NncmsNguoidungController */
/* @var $model NncmsNguoidung */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nncms-nguoidung-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TenTaiKhoan'); ?>
		<?php echo $form->textField($model,'TenTaiKhoan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TenTaiKhoan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MatKhau'); ?>
		<?php echo $form->textField($model,'MatKhau',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'MatKhau'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HoTen'); ?>
		<?php echo $form->textField($model,'HoTen',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'HoTen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DienThoai'); ?>
		<?php echo $form->textField($model,'DienThoai',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'DienThoai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DiaChi'); ?>
		<?php echo $form->textField($model,'DiaChi',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'DiaChi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NgaySinh'); ?>
		<?php echo $form->textField($model,'NgaySinh'); ?>
		<?php echo $form->error($model,'NgaySinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GioiTinh'); ?>
		<?php echo $form->textField($model,'GioiTinh'); ?>
		<?php echo $form->error($model,'GioiTinh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NgayDangKy'); ?>
		<?php echo $form->textField($model,'NgayDangKy'); ?>
		<?php echo $form->error($model,'NgayDangKy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idNhom'); ?>
		<?php echo $form->textField($model,'idNhom'); ?>
		<?php echo $form->error($model,'idNhom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KichHoat'); ?>
		<?php echo $form->textField($model,'KichHoat'); ?>
		<?php echo $form->error($model,'KichHoat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MaNgauNhien'); ?>
		<?php echo $form->textField($model,'MaNgauNhien',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'MaNgauNhien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DiemSMS'); ?>
		<?php echo $form->textField($model,'DiemSMS'); ?>
		<?php echo $form->error($model,'DiemSMS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->