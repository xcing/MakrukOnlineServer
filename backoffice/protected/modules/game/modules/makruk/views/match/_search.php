<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'matchId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'gameId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'userId1',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'userId2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'result',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'scoreMatch1',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'scoreMatch2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'score1win',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'score1lose',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'score2win',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'score2lose',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'history',array('class'=>'span5','maxlength'=>18000)); ?>

	<?php echo $form->textFieldRow($model,'createdDate',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
