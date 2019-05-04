<?php
/* @var $this CauhinhController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cauhinhs',
);

$this->menu=array(
	array('label'=>'Create Cauhinh', 'url'=>array('create')),
	array('label'=>'Manage Cauhinh', 'url'=>array('admin')),
);
?>

<h1>Cauhinhs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
