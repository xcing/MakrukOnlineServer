<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'statuserId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'userId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'gameId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'score',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'money',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'win',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'lose',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'draw',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'abandon',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'themeHave',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'themeEquip',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'currentMatchId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ads',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
