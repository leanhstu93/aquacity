<?php
/* @var $this LoaitinController */
/* @var $data Loaitin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SetMenu')); ?>:</b>
	<?php echo CHtml::encode($data->SetMenu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SetHome')); ?>:</b>
	<?php echo CHtml::encode($data->SetHome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Active')); ?>:</b>
	<?php echo CHtml::encode($data->Active); ?>
	<br />


</div>