<?php
$this->breadcrumbs=array(
	'Moneylogs',
);

$this->menu=array(
	array('label'=>'Create Moneylog','url'=>array('create')),
	array('label'=>'Manage Moneylog','url'=>array('admin')),
);
?>

<h1>Moneylogs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
