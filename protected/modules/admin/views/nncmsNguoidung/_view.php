<?php
/* @var $this NncmsNguoidungController */
/* @var $data NncmsNguoidung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNguoiDung')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idNguoiDung), array('view', 'id'=>$data->idNguoiDung)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TenTaiKhoan')); ?>:</b>
	<?php echo CHtml::encode($data->TenTaiKhoan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MatKhau')); ?>:</b>
	<?php echo CHtml::encode($data->MatKhau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HoTen')); ?>:</b>
	<?php echo CHtml::encode($data->HoTen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DienThoai')); ?>:</b>
	<?php echo CHtml::encode($data->DienThoai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DiaChi')); ?>:</b>
	<?php echo CHtml::encode($data->DiaChi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NgaySinh')); ?>:</b>
	<?php echo CHtml::encode($data->NgaySinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GioiTinh')); ?>:</b>
	<?php echo CHtml::encode($data->GioiTinh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NgayDangKy')); ?>:</b>
	<?php echo CHtml::encode($data->NgayDangKy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNhom')); ?>:</b>
	<?php echo CHtml::encode($data->idNhom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KichHoat')); ?>:</b>
	<?php echo CHtml::encode($data->KichHoat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaNgauNhien')); ?>:</b>
	<?php echo CHtml::encode($data->MaNgauNhien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DiemSMS')); ?>:</b>
	<?php echo CHtml::encode($data->DiemSMS); ?>
	<br />

	*/ ?>

</div>