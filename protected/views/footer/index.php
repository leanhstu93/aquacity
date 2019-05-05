<?php
/* @var $this FooterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Footers',
);

$this->menu=array(
	array('label'=>'Create Footer', 'url'=>array('create')),
	array('label'=>'Manage Footer', 'url'=>array('admin')),
);
?>

<h1>Footers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
