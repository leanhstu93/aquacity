<?php
/* @var $this NncmsDonhangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nncms Donhangs',
);

$this->menu=array(
	array('label'=>'Create NncmsDonhang', 'url'=>array('create')),
	array('label'=>'Manage NncmsDonhang', 'url'=>array('admin')),
);
?>

<h1>Nncms Donhangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
