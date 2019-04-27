<?php
/* @var $this VideoLangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Video Langs',
);

$this->menu=array(
	array('label'=>'Create VideoLang', 'url'=>array('create')),
	array('label'=>'Manage VideoLang', 'url'=>array('admin')),
);
?>

<h1>Video Langs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
