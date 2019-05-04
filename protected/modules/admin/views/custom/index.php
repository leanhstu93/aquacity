<?php
/* @var $this CustomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customs',
);

$this->menu=array(
	array('label'=>'Create Custom', 'url'=>array('create')),
	array('label'=>'Manage Custom', 'url'=>array('admin')),
);
?>

<h1>Customs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
