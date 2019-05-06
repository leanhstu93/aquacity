<?php
/* @var $this FooterController */
/* @var $model Footer */

$this->breadcrumbs=array(
	'Footers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Footer', 'url'=>array('index')),
	array('label'=>'Manage Footer', 'url'=>array('admin')),
);
?>

<h1>Create Footer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>