<?php
$this->breadcrumbs=array(
	'Moneylogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Moneylog','url'=>array('index')),
	array('label'=>'Manage Moneylog','url'=>array('admin')),
);
?>

<h1>Create Moneylog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>