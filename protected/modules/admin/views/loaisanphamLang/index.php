<?php
/* @var $this LoaisanphamLangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Loaisanpham Langs',
);

$this->menu=array(
	array('label'=>'Create LoaisanphamLang', 'url'=>array('create')),
	array('label'=>'Manage LoaisanphamLang', 'url'=>array('admin')),
);
?>

<h1>Loaisanpham Langs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
