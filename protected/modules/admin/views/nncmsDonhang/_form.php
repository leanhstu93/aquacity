<?php
/* @var $this NncmsDonhangController */
/* @var $model NncmsDonhang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nncms-donhang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idNguoiDung'); ?>
		<?php echo $form->textField($model,'idNguoiDung'); ?>
		<?php echo $form->error($model,'idNguoiDung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ThoiGianDat'); ?>
		<?php echo $form->textField($model,'ThoiGianDat'); ?>
		<?php echo $form->error($model,'ThoiGianDat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TenNguoiNhan'); ?>
		<?php echo $form->textField($model,'TenNguoiNhan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TenNguoiNhan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DiaDiemGiao'); ?>
		<?php echo $form->textField($model,'DiaDiemGiao',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'DiaDiemGiao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GhiChu'); ?>
		<?php echo $form->textField($model,'GhiChu',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'GhiChu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TinhTrang'); ?>
		<?php echo $form->textField($model,'TinhTrang'); ?>
		<?php echo $form->error($model,'TinhTrang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->