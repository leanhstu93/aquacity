<?php
/* @var $this NncmsNguoidungController */
/* @var $model NncmsNguoidung */

$this->breadcrumbs=array(
	'Nncms Nguoidungs'=>array('index'),
	$model->idNguoiDung=>array('view','id'=>$model->idNguoiDung),
	'Update',
);

$this->menu=array(
	array('label'=>'List NncmsNguoidung', 'url'=>array('index')),
	array('label'=>'Create NncmsNguoidung', 'url'=>array('create')),
	array('label'=>'View NncmsNguoidung', 'url'=>array('view', 'id'=>$model->idNguoiDung)),
	array('label'=>'Manage NncmsNguoidung', 'url'=>array('admin')),
);
?>

<h1>Update NncmsNguoidung <?php echo $model->idNguoiDung; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>