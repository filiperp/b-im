<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="IM band" name="description"/>
    <meta content="Filipe - filiperp@gmail.com" name="author"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/metronic/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>



  <?php  Yii::app()->clientScript->registerScript('baseURLScript',
    "
        var baseURL;
        baseURL = '" . Yii::app()->request->baseUrl . "';

    "
    , CClientScript::POS_BEGIN);
  ?>

    <!-- END GLOBAL MANDATORY STYLES -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/metronic/band/css/styles.css" rel="stylesheet" type="text/css"/>
</head>

