<?php
/* @var $this NncmsNguoidungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nncms Nguoidungs',
);

$this->menu=array(
	array('label'=>'Create NncmsNguoidung', 'url'=>array('create')),
	array('label'=>'Manage NncmsNguoidung', 'url'=>array('admin')),
);
?>

<h1>Nncms Nguoidungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
