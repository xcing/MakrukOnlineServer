<h1>Manage Matches</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'match-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'matchId',
        array(
            'name' => 'gameId',
            'value' => '$data->game->name',
            'filter' => CHtml::listData(Game::model()->findAll(array('order' => 'gameId')), 'gameId', 'name'),
        ),
        'userId1',
        'userId2',
        'result',
        'createdDate',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template'=>'{view} {update}',
        ),
    ),
));
?>
