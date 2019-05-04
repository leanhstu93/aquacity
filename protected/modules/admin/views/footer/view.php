<?php
/* @var $this HinhanhController */
/* @var $model Hinhanh */

$this->breadcrumbs=array(
	'Hinhanhs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hinhanh', 'url'=>array('index')),
	array('label'=>'Create Hinhanh', 'url'=>array('create')),
	array('label'=>'Update Hinhanh', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hinhanh', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hinhanh', 'url'=>array('admin')),
);
?>

<h1>View Hinhanh #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'header',
	),
)); ?>
