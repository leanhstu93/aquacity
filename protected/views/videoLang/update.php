<?php
/* @var $this VideoLangController */
/* @var $model VideoLang */

$this->breadcrumbs=array(
	'Video Langs'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VideoLang', 'url'=>array('index')),
	array('label'=>'Create VideoLang', 'url'=>array('create')),
	array('label'=>'View VideoLang', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VideoLang', 'url'=>array('admin')),
);
?>

<h1>Update VideoLang <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>