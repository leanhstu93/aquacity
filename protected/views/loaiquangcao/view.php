<?php
/* @var $this LoaiquangcaoController */
/* @var $model Loaiquangcao */

$this->breadcrumbs=array(
	'Loaiquangcaos'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Loaiquangcao', 'url'=>array('index')),
	array('label'=>'Create Loaiquangcao', 'url'=>array('create')),
	array('label'=>'Update Loaiquangcao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Loaiquangcao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Loaiquangcao', 'url'=>array('admin')),
);
?>

<h1>View Loaiquangcao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idLoaiHienThi',
		'Name',
		'Alias',
		'Active',
	),
)); ?>
