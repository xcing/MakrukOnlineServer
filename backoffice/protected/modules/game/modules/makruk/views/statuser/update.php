<?php
$this->breadcrumbs=array(
	'Statusers'=>array('index'),
	$model->statuserId=>array('view','id'=>$model->statuserId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Statuser','url'=>array('index')),
	array('label'=>'Create Statuser','url'=>array('create')),
	array('label'=>'View Statuser','url'=>array('view','id'=>$model->statuserId)),
	array('label'=>'Manage Statuser','url'=>array('admin')),
);
?>

<h1>Update Statuser <?php echo $model->statuserId; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>