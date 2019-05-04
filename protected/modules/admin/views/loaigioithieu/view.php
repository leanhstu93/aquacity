<?php
/* @var $this LoaitinController */
/* @var $model Loaitin */

$this->breadcrumbs=array(
	'Loaitins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Loaitin', 'url'=>array('index')),
	array('label'=>'Create Loaitin', 'url'=>array('create')),
	array('label'=>'Update Loaitin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Loaitin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Loaitin', 'url'=>array('admin')),
);
?>

<h1>View Loaitin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SetMenu',
		'SetHome',
		'Active',
	),
)); ?>
