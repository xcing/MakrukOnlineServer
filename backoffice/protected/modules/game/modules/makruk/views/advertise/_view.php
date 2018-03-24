<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('advertiseId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->advertiseId),array('view','id'=>$data->advertiseId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picture')); ?>:</b>
	<?php echo CHtml::encode($data->picture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateStart')); ?>:</b>
	<?php echo CHtml::encode($data->dateStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateEnd')); ?>:</b>
	<?php echo CHtml::encode($data->dateEnd); ?>
	<br />


</div>