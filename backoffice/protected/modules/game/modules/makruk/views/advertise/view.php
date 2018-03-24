<?php
$this->breadcrumbs=array(
	'Advertises'=>array('index'),
	$model->advertiseId,
);

$this->menu=array(
	array('label'=>'List Advertise','url'=>array('index')),
	array('label'=>'Create Advertise','url'=>array('create')),
	array('label'=>'Update Advertise','url'=>array('update','id'=>$model->advertiseId)),
	array('label'=>'Delete Advertise','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->advertiseId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Advertise','url'=>array('admin')),
);
?>

<h1>View Advertise #<?php echo $model->advertiseId; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'advertiseId',
		'url',
		'picture',
		'position',
		'dateStart',
		'dateEnd',
	),
)); ?>
