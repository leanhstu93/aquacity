<?php
/* @var $this NncmsNguoidungController */
/* @var $model NncmsNguoidung */

$this->breadcrumbs=array(
	'Nncms Nguoidungs'=>array('index'),
	$model->idNguoiDung,
);

$this->menu=array(
	array('label'=>'List NncmsNguoidung', 'url'=>array('index')),
	array('label'=>'Create NncmsNguoidung', 'url'=>array('create')),
	array('label'=>'Update NncmsNguoidung', 'url'=>array('update', 'id'=>$model->idNguoiDung)),
	array('label'=>'Delete NncmsNguoidung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idNguoiDung),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NncmsNguoidung', 'url'=>array('admin')),
);
?>

<h1>View NncmsNguoidung #<?php echo $model->idNguoiDung; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idNguoiDung',
		'TenTaiKhoan',
		'MatKhau',
		'Email',
		'HoTen',
		'DienThoai',
		'DiaChi',
		'NgaySinh',
		'GioiTinh',
		'NgayDangKy',
		'idNhom',
		'KichHoat',
		'MaNgauNhien',
		'DiemSMS',
	),
)); ?>
