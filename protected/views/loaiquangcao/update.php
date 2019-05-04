<?php
/* @var $this LoaiquangcaoController */
/* @var $model Loaiquangcao */

$this->breadcrumbs=array(
	'Loaiquangcaos'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Loaiquangcao', 'url'=>array('index')),
	array('label'=>'Create Loaiquangcao', 'url'=>array('create')),
	array('label'=>'View Loaiquangcao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Loaiquangcao', 'url'=>array('admin')),
);
?>

<h1>Update Loaiquangcao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>