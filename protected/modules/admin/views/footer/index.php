<?php
/* @var $this HinhanhController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hinhanhs',
);

$this->menu=array(
	array('label'=>'Create Hinhanh', 'url'=>array('create')),
	array('label'=>'Manage Hinhanh', 'url'=>array('admin')),
);
?>

<h1>Hinhanhs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
