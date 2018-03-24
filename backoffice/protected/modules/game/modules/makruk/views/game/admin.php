<h1>Manage Games</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'game-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'gameId',
        'name',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view} {update}',
        ),
    ),
));
?>
