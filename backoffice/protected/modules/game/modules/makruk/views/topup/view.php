<?php
$this->breadcrumbs=array(
	'Topups'=>array('index'),
	$model->topupId,
);

$this->menu=array(
	array('label'=>'List Topup','url'=>array('index')),
	array('label'=>'Create Topup','url'=>array('create')),
	array('label'=>'Update Topup','url'=>array('update','id'=>$model->topupId)),
	array('label'=>'Delete Topup','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->topupId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Topup','url'=>array('admin')),
);
?>

<h1>View Topup #<?php echo $model->topupId; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'topupId',
		'statuserId',
		'product_id',
		'amount',
		'createdDate',
		'ip_address',
	),
)); ?>
