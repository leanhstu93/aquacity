<?php
/* @var $this HinhanhController */
/* @var $model Hinhanh */

$this->breadcrumbs=array(
	'Hinhanhs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hinhanh', 'url'=>array('index')),
	array('label'=>'Manage Hinhanh', 'url'=>array('admin')),
);
?>

<h1>Create Hinhanh</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>