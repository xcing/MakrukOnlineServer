<?php
$this->breadcrumbs=array(
	'Statusers',
);

$this->menu=array(
	array('label'=>'Create Statuser','url'=>array('create')),
	array('label'=>'Manage Statuser','url'=>array('admin')),
);
?>

<h1>Statusers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
