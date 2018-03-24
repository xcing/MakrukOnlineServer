<?php
$this->breadcrumbs=array(
	'Moneylogs'=>array('index'),
	$model->moneylogId=>array('view','id'=>$model->moneylogId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Moneylog','url'=>array('index')),
	array('label'=>'Create Moneylog','url'=>array('create')),
	array('label'=>'View Moneylog','url'=>array('view','id'=>$model->moneylogId)),
	array('label'=>'Manage Moneylog','url'=>array('admin')),
);
?>

<h1>Update Moneylog <?php echo $model->moneylogId; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>