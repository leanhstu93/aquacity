<?php
/* @var $this ThongtinchungController */
/* @var $model Thongtinchung */

$this->breadcrumbs=array(
	'Thongtinchungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Thongtinchung', 'url'=>array('index')),
	array('label'=>'Manage Thongtinchung', 'url'=>array('admin')),
);
?>

<h1>Create Thongtinchung</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>