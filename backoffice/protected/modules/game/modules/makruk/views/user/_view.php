<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userId),array('view','id'=>$data->userId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guestId')); ?>:</b>
	<?php echo CHtml::encode($data->guestId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebookId')); ?>:</b>
	<?php echo CHtml::encode($data->facebookId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('displayName')); ?>:</b>
	<?php echo CHtml::encode($data->displayName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photoFrameId')); ?>:</b>
	<?php echo CHtml::encode($data->photoFrameId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('profilePictureId')); ?>:</b>
	<?php echo CHtml::encode($data->profilePictureId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdDate')); ?>:</b>
	<?php echo CHtml::encode($data->createdDate); ?>
	<br />

	*/ ?>

</div>