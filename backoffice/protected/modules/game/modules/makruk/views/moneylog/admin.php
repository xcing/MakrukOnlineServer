<h1>Manage Moneylogs</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'moneylog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'statuserId',
		'moneyBefore',
		'moneyAfter',
		'type',
		'createdDate',
	),
)); ?>
