<?php
$this->breadcrumbs=array(
	'Topups',
);

$this->menu=array(
	array('label'=>'Create Topup','url'=>array('create')),
	array('label'=>'Manage Topup','url'=>array('admin')),
);
?>

<h1>Topups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
