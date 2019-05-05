<?php
/* @var $this FooterController */
/* @var $data Footer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col1')); ?>:</b>
	<?php echo CHtml::encode($data->col1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('col2')); ?>:</b>
	<?php echo CHtml::encode($data->col2); ?>
	<br />


</div>