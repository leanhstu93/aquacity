<?php
/* @var $this ThongtinchungController */
/* @var $model Thongtinchung */

$this->breadcrumbs=array(
	'Thongtinchungs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Thongtinchung', 'url'=>array('index')),
	array('label'=>'Create Thongtinchung', 'url'=>array('create')),
	array('label'=>'Update Thongtinchung', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Thongtinchung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Thongtinchung', 'url'=>array('admin')),
);
?>

<h1>View Thongtinchung #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Type',
	),
)); ?>
