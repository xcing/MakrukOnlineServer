<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('statuserId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->statuserId),array('view','id'=>$data->statuserId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gameId')); ?>:</b>
	<?php echo CHtml::encode($data->gameId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('money')); ?>:</b>
	<?php echo CHtml::encode($data->money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('win')); ?>:</b>
	<?php echo CHtml::encode($data->win); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lose')); ?>:</b>
	<?php echo CHtml::encode($data->lose); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('draw')); ?>:</b>
	<?php echo CHtml::encode($data->draw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abandon')); ?>:</b>
	<?php echo CHtml::encode($data->abandon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('themeHave')); ?>:</b>
	<?php echo CHtml::encode($data->themeHave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('themeEquip')); ?>:</b>
	<?php echo CHtml::encode($data->themeEquip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentMatchId')); ?>:</b>
	<?php echo CHtml::encode($data->currentMatchId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ads')); ?>:</b>
	<?php echo CHtml::encode($data->ads); ?>
	<br />

	*/ ?>

</div>