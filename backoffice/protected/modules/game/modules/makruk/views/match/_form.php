<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'match-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
