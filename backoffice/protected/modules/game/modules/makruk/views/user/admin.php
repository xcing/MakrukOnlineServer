<h1>Manage Users</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'userId',
        'email',
        'guestId',
        'facebookId',
        'displayName',
        'createdDate',
        array(
            'name' => 'active',
            'value' => array($model, 'convertActive'),
            'filter' => $model->getActiveArray(),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view} {update}',
        ),
    ),
));
?>
