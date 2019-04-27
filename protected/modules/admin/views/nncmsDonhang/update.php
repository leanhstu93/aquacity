<?php
/* @var $this NncmsDonhangController */
/* @var $model NncmsDonhang */

$this->breadcrumbs=array(
	'Nncms Donhangs'=>array('index'),
	$model->idDH=>array('view','id'=>$model->idDH),
	'Update',
);

$this->menu=array(
	array('label'=>'List NncmsDonhang', 'url'=>array('index')),
	array('label'=>'Create NncmsDonhang', 'url'=>array('create')),
	array('label'=>'View NncmsDonhang', 'url'=>array('view', 'id'=>$model->idDH)),
	array('label'=>'Manage NncmsDonhang', 'url'=>array('admin')),
);
?>

<h1>Update NncmsDonhang <?php echo $model->idDH; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>