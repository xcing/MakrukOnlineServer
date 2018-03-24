<?php
$this->breadcrumbs=array(
	'Statusers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Statuser','url'=>array('index')),
	array('label'=>'Manage Statuser','url'=>array('admin')),
);
?>

<h1>Create Statuser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>