<?php
/* @var $this PhoneBookController */
/* @var $data PhoneBook */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>
	<?php echo CHtml::encode($data->designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension')); ?>:</b>
	<?php echo CHtml::encode($data->extension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imi_no')); ?>:</b>
	<?php echo CHtml::encode($data->imi_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sim_1')); ?>:</b>
	<?php echo CHtml::encode($data->sim_1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sim_2')); ?>:</b>
	<?php echo CHtml::encode($data->sim_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_use')); ?>:</b>
	<?php echo CHtml::encode($data->last_use); ?>
	<br />

	*/ ?>

</div>