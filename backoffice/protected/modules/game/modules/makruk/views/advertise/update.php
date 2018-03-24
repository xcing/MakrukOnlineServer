<?php
$this->breadcrumbs=array(
	'Advertises'=>array('index'),
	$model->advertiseId=>array('view','id'=>$model->advertiseId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Advertise','url'=>array('index')),
	array('label'=>'Create Advertise','url'=>array('create')),
	array('label'=>'View Advertise','url'=>array('view','id'=>$model->advertiseId)),
	array('label'=>'Manage Advertise','url'=>array('admin')),
);
?>

<h1>Update Advertise <?php echo $model->advertiseId; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>