<?php
$this->breadcrumbs=array(
	'Statusers'=>array('index'),
	$model->statuserId,
);

$this->menu=array(
	array('label'=>'List Statuser','url'=>array('index')),
	array('label'=>'Create Statuser','url'=>array('create')),
	array('label'=>'Update Statuser','url'=>array('update','id'=>$model->statuserId)),
	array('label'=>'Delete Statuser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->statuserId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Statuser','url'=>array('admin')),
);
?>

<h1>View Statuser #<?php echo $model->statuserId; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'statuserId',
		'userId',
		'gameId',
		'score',
		'money',
		'win',
		'lose',
		'draw',
		'abandon',
		'themeHave',
		'themeEquip',
		'status',
		'currentMatchId',
		'ads',
	),
)); ?>
