<?php
/* @var $this VideoLangController */
/* @var $model VideoLang */

$this->breadcrumbs=array(
	'Video Langs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VideoLang', 'url'=>array('index')),
	array('label'=>'Manage VideoLang', 'url'=>array('admin')),
);
?>

<h1>Create VideoLang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>