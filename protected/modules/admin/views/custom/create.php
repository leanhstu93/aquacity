<?php
/* @var $this CustomController */
/* @var $model Custom */

$this->breadcrumbs=array(
	'Customs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Custom', 'url'=>array('index')),
	array('label'=>'Manage Custom', 'url'=>array('admin')),
);
?>

<h1>Create Custom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>