<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'moneylogId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'statuserId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'moneyBefore',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'moneyAfter',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'createdDate',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
