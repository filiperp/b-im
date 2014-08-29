<html>
<head>
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <title>Show images</title>
</head>
<body>
<h1>File upload</h1>
<p>Please upload an image</p>
<div class="form">
    <?php
    $form=$this->beginWidget('CActiveForm', array(
        'id'=>'topic-form',
        'enableAjaxValidation'=>false,
        'enableClientValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>

    <div class="row">

        <?php
        $this->widget('CMultiFileUpload', array(
            'name' => 'images',
            'accept' => 'jpeg|jpg|gif|png',
            'duplicate' => 'Duplicate file',
            'denied' => 'Invalid file type',
        ));

        ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

    <?php $this->endWidget($form); ?>
    <?php echo CHtml::link('View submitted images', array('fileObject/show')); ?>
</div>
</body>
</html>