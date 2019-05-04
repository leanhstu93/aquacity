<?php
/* @var $this BaogiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Baogias',
);

$this->menu=array(
	array('label'=>'Create Baogia', 'url'=>array('create')),
	array('label'=>'Manage Baogia', 'url'=>array('admin')),
);
?>

<h1>Baogias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
