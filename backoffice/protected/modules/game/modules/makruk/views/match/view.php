<?php
$this->breadcrumbs=array(
	'Matches'=>array('index'),
	$model->matchId,
);

$this->menu=array(
	array('label'=>'List Match','url'=>array('index')),
	array('label'=>'Create Match','url'=>array('create')),
	array('label'=>'Update Match','url'=>array('update','id'=>$model->matchId)),
	array('label'=>'Delete Match','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->matchId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Match','url'=>array('admin')),
);
?>

<h1>View Match #<?php echo $model->matchId; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'matchId',
		'gameId',
		'userId1',
		'userId2',
		'result',
		'scoreMatch1',
		'scoreMatch2',
		'score1win',
		'score1lose',
		'score2win',
		'score2lose',
		'history',
		'createdDate',
	),
)); ?>
