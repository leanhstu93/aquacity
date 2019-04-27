<?php
/* @var $this NncmsDonhangController */
/* @var $model NncmsDonhang */

$this->breadcrumbs=array(
	'Nncms Donhangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NncmsDonhang', 'url'=>array('index')),
	array('label'=>'Manage NncmsDonhang', 'url'=>array('admin')),
);
?>

<h1>Create NncmsDonhang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>