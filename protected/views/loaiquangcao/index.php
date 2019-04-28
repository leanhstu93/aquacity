<?php
/* @var $this LoaiquangcaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Loaiquangcaos',
);

$this->menu=array(
	array('label'=>'Create Loaiquangcao', 'url'=>array('create')),
	array('label'=>'Manage Loaiquangcao', 'url'=>array('admin')),
);
?>

<h1>Loaiquangcaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
