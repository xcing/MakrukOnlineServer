<?php
$this->breadcrumbs=array(
	'Topups'=>array('index'),
	$model->topupId=>array('view','id'=>$model->topupId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Topup','url'=>array('index')),
	array('label'=>'Create Topup','url'=>array('create')),
	array('label'=>'View Topup','url'=>array('view','id'=>$model->topupId)),
	array('label'=>'Manage Topup','url'=>array('admin')),
);
?>

<h1>Update Topup <?php echo $model->topupId; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>