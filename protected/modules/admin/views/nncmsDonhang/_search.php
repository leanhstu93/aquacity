<?php
/* @var $this NncmsDonhangController */
/* @var $model NncmsDonhang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idDH'); ?>
		<?php echo $form->textField($model,'idDH'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idNguoiDung'); ?>
		<?php echo $form->textField($model,'idNguoiDung'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ThoiGianDat'); ?>
		<?php echo $form->textField($model,'ThoiGianDat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TenNguoiNhan'); ?>
		<?php echo $form->textField($model,'TenNguoiNhan',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DiaDiemGiao'); ?>
		<?php echo $form->textField($model,'DiaDiemGiao',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GhiChu'); ?>
		<?php echo $form->textField($model,'GhiChu',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TinhTrang'); ?>
		<?php echo $form->textField($model,'TinhTrang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->