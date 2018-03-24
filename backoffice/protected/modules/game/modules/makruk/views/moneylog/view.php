<?php
$this->breadcrumbs=array(
	'Moneylogs'=>array('index'),
	$model->moneylogId,
);

$this->menu=array(
	array('label'=>'List Moneylog','url'=>array('index')),
	array('label'=>'Create Moneylog','url'=>array('create')),
	array('label'=>'Update Moneylog','url'=>array('update','id'=>$model->moneylogId)),
	array('label'=>'Delete Moneylog','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->moneylogId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Moneylog','url'=>array('admin')),
);
?>

<h1>View Moneylog #<?php echo $model->moneylogId; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'moneylogId',
		'statuserId',
		'moneyBefore',
		'moneyAfter',
		'type',
		'createdDate',
	),
)); ?>
