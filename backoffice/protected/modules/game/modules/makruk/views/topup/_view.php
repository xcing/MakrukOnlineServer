<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('topupId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->topupId),array('view','id'=>$data->topupId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statuserId')); ?>:</b>
	<?php echo CHtml::encode($data->statuserId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdDate')); ?>:</b>
	<?php echo CHtml::encode($data->createdDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />


</div>