<?php
$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/supersized/css/supersized.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/css/supersized/js/supersized.3.2.7.js');
?>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array(
            'class' => 'form-signin form-horizontal'
        )
    ));
    ?>
    <h3 class="form-signin-heading">login</h3>

    <?php
    
    echo $form->textField($model, 'username', array(
        'class' => 'input-block-level',
        'placeHolder' => 'ชื่อผู้ใช้'));
    ?>
    <?php //echo $form->error($model, 'username');  ?>





    <?php
    echo $form->passwordField($model, 'password', array(
        'class' => 'input-block-level',
        'placeHolder' => 'รหัสผ่าน',
    ));
    ?>
    <?php //echo $form->error($model, 'password');  ?>

    <?php //echo $form->checkBox($model, 'rememberMe'); ?>
    <?php //echo $form->label($model, 'rememberMe'); ?>
    <?php //echo $form->error($model, 'rememberMe');  ?>

    <?php
    echo CHtml::submitButton('เข้าสู่ระบบ', array(
        'class' => 'btn btn-primary'
    ));
    ?>
    <br /><br />
    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
    }
    ?>

    <?php $this->endWidget(); ?>
</div><!-- form -->

<script type="text/javascript">

    jQuery(function($) {

        $.supersized({
            // Functionality
            slide_interval: 3000, // Length between transitions
            transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed: 700, // Speed of transition

            // Components							
            slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides: [// Slideshow Images
                {image: '<?= Yii::app()->request->baseUrl; ?>/images/bg.jpg', title: '', thumb: '', url: ''},
            ]

        });
    });

</script>


