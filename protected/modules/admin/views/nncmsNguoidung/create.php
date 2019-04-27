<?php
/* @var $this NncmsNguoidungController */
/* @var $model NncmsNguoidung */

$this->breadcrumbs=array(
	'Nncms Nguoidungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NncmsNguoidung', 'url'=>array('index')),
	array('label'=>'Manage NncmsNguoidung', 'url'=>array('admin')),
);
?>

<h1>Create NncmsNguoidung</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>