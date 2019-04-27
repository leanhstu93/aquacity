<?php
/* @var $this ThongtinchungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Thongtinchungs',
);

$this->menu=array(
	array('label'=>'Create Thongtinchung', 'url'=>array('create')),
	array('label'=>'Manage Thongtinchung', 'url'=>array('admin')),
);
?>

<h1>Thongtinchungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
