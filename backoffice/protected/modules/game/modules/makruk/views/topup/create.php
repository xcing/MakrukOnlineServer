<?php
$this->breadcrumbs=array(
	'Topups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Topup','url'=>array('index')),
	array('label'=>'Manage Topup','url'=>array('admin')),
);
?>

<h1>Create Topup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>