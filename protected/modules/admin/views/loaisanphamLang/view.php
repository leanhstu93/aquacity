<?php
/* @var $this LoaisanphamLangController */
/* @var $model LoaisanphamLang */

$this->breadcrumbs=array(
	'Loaisanpham Langs'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List LoaisanphamLang', 'url'=>array('index')),
	array('label'=>'Create LoaisanphamLang', 'url'=>array('create')),
	array('label'=>'Update LoaisanphamLang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LoaisanphamLang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LoaisanphamLang', 'url'=>array('admin')),
);
?>

<h1>View LoaisanphamLang #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Parent',
		'Name',
		'Alias',
		'SetMenu',
		'Active',
	),
)); ?>
