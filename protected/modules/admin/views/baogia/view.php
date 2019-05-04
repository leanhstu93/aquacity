<style type="text/css">
	.wrap{background:white;padding: 2%;margin: 1% 0}
	table.detail-view tr.odd {
    background: #fdb3d5;
}
</style>
<?php
/* @var $this BaogiaController */
/* @var $model Baogia */

$this->breadcrumbs=array(
	'Baogias'=>array('index'),
	$model->Name,
);

$this->menu=array(

	array('label'=>'Quản lý nhận báo giá', 'url'=>array('admin')),
);
?>

<h1>View Baogia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Name',
		'Phone',
		'Email',
		'Description',
		'Active',
	),
)); ?>


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
			<?php echo $form->labelEx($model,'Active',array('class' => 'col-sm-2 control-label form-label')); ?>
			<div class="col-sm-6">
				<?php $drow = array('0'=>'Chưa xử lý', '1' => 'Đã xử lý'); ?>
				<?php echo $form->dropDownList($model,'Active',$drow,array('class'=>'form-control col-sm-6','rows'=>5)); ?>
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
