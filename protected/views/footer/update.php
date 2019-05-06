<?php
/* @var $this FooterController */
/* @var $model Footer */

$this->breadcrumbs=array(
	'Footers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Footer', 'url'=>array('index')),
	array('label'=>'Create Footer', 'url'=>array('create')),
	array('label'=>'View Footer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Footer', 'url'=>array('admin')),
);
?>

<h1>Update Footer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>