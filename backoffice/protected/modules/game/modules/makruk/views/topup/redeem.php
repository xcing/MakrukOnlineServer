
<h1>Manual Redeem</h1>
<?php
foreach (Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
}
?>
<form class="form-vertical" method="post">
    <label >Statuser id</label>
    <input class="span5" maxlength="50" name="statuserId" type="text" value="<?php echo $statuserId;?>" />

    <label >Product id</label>
    <input class="span5" maxlength="50" name="productId" type="text" value="<?php echo $productId;?>" />

    <div class="form-actions">
        <button class="btn btn-primary" type="submit" name="yt0">Save</button>	
    </div>

</form>
