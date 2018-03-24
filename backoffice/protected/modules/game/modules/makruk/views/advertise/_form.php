<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'advertise-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'url', array('class' => 'span5', 'maxlength' => 100)); ?>

<?php echo $form->textFieldRow($model, 'picture', array('class' => 'span5', 'maxlength' => 100)); ?>

<label><?= $model->getAttributeLabel('position'); ?></label>
<?php
echo CHtml::dropDownList('Advertise[position]', $model->position, $model->getPositionArray());
?>

<label><?= $model->getAttributeLabel('dateStart'); ?></label>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'name' => 'Advertise[dateStart]',
    'value' => $model->dateStart,
    'options' => array(
        'showAnim' => 'fold',
        'dateFormat' => 'yy-mm-dd'
    ),
    'htmlOptions' => array(
        'style' => 'height:20px;',
    ),
));
?>

<label><?= $model->getAttributeLabel('dateEnd'); ?></label>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'name' => 'Advertise[dateEnd]',
    'value' => $model->dateEnd,
    'options' => array(
        'showAnim' => 'fold',
        'dateFormat' => 'yy-mm-dd'
    ),
    'htmlOptions' => array(
        'style' => 'height:20px;',
    ),
));
?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
