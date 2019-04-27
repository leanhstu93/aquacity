<?php
/* @var $this NncmsDonhangController */
/* @var $data NncmsDonhang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDH')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDH), array('view', 'id'=>$data->idDH)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idNguoiDung')); ?>:</b>
	<?php echo CHtml::encode($data->idNguoiDung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ThoiGianDat')); ?>:</b>
	<?php echo CHtml::encode($data->ThoiGianDat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TenNguoiNhan')); ?>:</b>
	<?php echo CHtml::encode($data->TenNguoiNhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DiaDiemGiao')); ?>:</b>
	<?php echo CHtml::encode($data->DiaDiemGiao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GhiChu')); ?>:</b>
	<?php echo CHtml::encode($data->GhiChu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TinhTrang')); ?>:</b>
	<?php echo CHtml::encode($data->TinhTrang); ?>
	<br />

	
</div>