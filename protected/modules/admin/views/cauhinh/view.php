<?php
/* @var $this CauhinhController */
/* @var $model Cauhinh */

$this->breadcrumbs=array(
	'Cauhinhs'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Cauhinh', 'url'=>array('index')),
	array('label'=>'Create Cauhinh', 'url'=>array('create')),
	array('label'=>'Update Cauhinh', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cauhinh', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cauhinh', 'url'=>array('admin')),
);
?>

<h1>View Cauhinh #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'googlemap',
		'Email',
		'Title',
		'Description',
		'Keyword',
		'head',
		'body',
		'footer',
		'BaoTri',
	),
)); ?>
