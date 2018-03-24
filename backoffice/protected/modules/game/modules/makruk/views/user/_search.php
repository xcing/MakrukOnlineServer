<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'userId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'guestId',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'facebookId',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'displayName',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'photoFrameId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'profilePictureId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'createdDate',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
