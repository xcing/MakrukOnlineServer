<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('matchId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->matchId),array('view','id'=>$data->matchId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gameId')); ?>:</b>
	<?php echo CHtml::encode($data->gameId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId1')); ?>:</b>
	<?php echo CHtml::encode($data->userId1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId2')); ?>:</b>
	<?php echo CHtml::encode($data->userId2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result')); ?>:</b>
	<?php echo CHtml::encode($data->result); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scoreMatch1')); ?>:</b>
	<?php echo CHtml::encode($data->scoreMatch1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scoreMatch2')); ?>:</b>
	<?php echo CHtml::encode($data->scoreMatch2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('score1win')); ?>:</b>
	<?php echo CHtml::encode($data->score1win); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score1lose')); ?>:</b>
	<?php echo CHtml::encode($data->score1lose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score2win')); ?>:</b>
	<?php echo CHtml::encode($data->score2win); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score2lose')); ?>:</b>
	<?php echo CHtml::encode($data->score2lose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('history')); ?>:</b>
	<?php echo CHtml::encode($data->history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdDate')); ?>:</b>
	<?php echo CHtml::encode($data->createdDate); ?>
	<br />

	*/ ?>

</div>