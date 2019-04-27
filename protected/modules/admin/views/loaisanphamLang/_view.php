<?php
/* @var $this LoaisanphamLangController */
/* @var $data LoaisanphamLang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Parent')); ?>:</b>
	<?php echo CHtml::encode($data->Parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Alias')); ?>:</b>
	<?php echo CHtml::encode($data->Alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SetMenu')); ?>:</b>
	<?php echo CHtml::encode($data->SetMenu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Active')); ?>:</b>
	<?php echo CHtml::encode($data->Active); ?>
	<br />


</div>