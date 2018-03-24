<h1>Manage Advertises</h1>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'advertise-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'url',
        array(
            'name' => 'picture',
            'type' => 'raw',
            'value' => 'CHtml::image($data->picture, $data->url, array("width"=>200))',
            'filter' => false,
        ),
        'position',
        'dateStart',
        'dateEnd',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
