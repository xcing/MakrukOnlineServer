<h1>View User #<?php echo $model->userId; ?></h1>

<div class="form-actions">
    <a href="<?php echo Yii::app()->createUrl('game/makruk/user/changepassword', array('id' => $model->userId)); ?>">
        <button class="btn btn-danger" name="yt0">Change password</button>	
    </a>
</div>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'userId',
        'email',
        'password',
        'guestId',
        'facebookId',
        'displayName',
        'photoFrameId',
        'profilePictureId',
        'createdDate',
    ),
));
?>
