<?php
/* @var $this VideoLangController */
/* @var $model VideoLang */

$this->breadcrumbs=array(
	'Video Langs'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List VideoLang', 'url'=>array('index')),
	array('label'=>'Create VideoLang', 'url'=>array('create')),
	array('label'=>'Update VideoLang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VideoLang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VideoLang', 'url'=>array('admin')),
);
?>

<h1>View VideoLang #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idVideo',
		'Name',
	),
)); ?>
