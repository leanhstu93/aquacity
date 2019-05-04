<?php
/* @var $this CauhinhController */
/* @var $model Cauhinh */

$this->breadcrumbs=array(
	'Cauhinhs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cauhinh', 'url'=>array('index')),
	array('label'=>'Manage Cauhinh', 'url'=>array('admin')),
);
?>

<h1>Create Cauhinh</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>