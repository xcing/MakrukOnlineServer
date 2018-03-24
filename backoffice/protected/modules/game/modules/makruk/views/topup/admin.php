<h1>Manage Topups</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'topup-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'statuserId',
        array(
            'name' => 'product_id',
            'value' => array($model, 'convertProduct'),
            'filter' => $model->getProductArray(),
        ),
        'amount',
        'createdDate',
        'ip_address',
    ),
));
?>
