<?php
/* @var $this LoaiquangcaoController */
/* @var $model Loaiquangcao */

$this->breadcrumbs=array(
	'Loaiquangcaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Loaiquangcao', 'url'=>array('index')),
	array('label'=>'Manage Loaiquangcao', 'url'=>array('admin')),
);
?>

<h1>Create Loaiquangcao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>