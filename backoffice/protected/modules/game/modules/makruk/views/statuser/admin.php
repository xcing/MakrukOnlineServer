<h1>Manage Statusers</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'statuser-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'statuserId',
        'userId',
        'gameId',
        'score',
        'money',
        'win',
        'lose',
        'draw',
        'themeHave',
        array(
            'name' => 'ads',
            'value' => array($model, 'convertAds'),
            'filter' => $model->getAdsArray(),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template'=>'{view} {update}',
        ),
    ),
));
?>
