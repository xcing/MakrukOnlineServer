<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneylogId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->moneylogId),array('view','id'=>$data->moneylogId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statuserId')); ?>:</b>
	<?php echo CHtml::encode($data->statuserId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneyBefore')); ?>:</b>
	<?php echo CHtml::encode($data->moneyBefore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneyAfter')); ?>:</b>
	<?php echo CHtml::encode($data->moneyAfter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdDate')); ?>:</b>
	<?php echo CHtml::encode($data->createdDate); ?>
	<br />


</div>