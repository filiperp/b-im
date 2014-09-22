<?php
$cs = Yii::app()->getClientScript();

$cs->registerCssFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/select2/select2.css');
$cs->registerCssFile(Yii::app()->request->baseUrl . '/metronic/assets/admin/pages/css/login-soft.css');

$cs->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/css/components.css');
$cs->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/css/plugins.css');
$cs->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/admin/layout/css/layout.css');
$cs->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/admin/layout/css/themes/default.css');
$cs->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/admin/layout/css/custom.css');
?>
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.php">
               <img src="<?php echo Yii::app()->request->baseUrl; ?>/metronic/band/images/logo-grupo2.png" alt="" style="width:300px ;"/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array(
            'autocomplete' => "off",
            'style' => 'margin-bottom:24px;'
        ),
    )); ?>

    <h3 class="form-title text-center">ADMIN</h3>

    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label visible-ie8 visible-ie9', "autocomplete" => 'off')); ?>
        <div class="input-group  margin-top-10">


            <span class="input-group-addon">
                    <i class="fa fa-user"></i> BANDEIRANTES\
            </span>

            <?php echo $form->textField($model, 'username', array(
                'class' => 'form-control placeholder-no-fix',
                'type' => 'text',
                'autocomplete' => 'off',
                'placeholder' => 'usuário',
            )); ?>

        </div>

        <?php echo $form->error($model, 'username', array('class' => 'help-block btn-danger ')); ?>

    </div>
    <div class="form-group ">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label visible-ie8 visible-ie9 ')); ?>
        <div class="input-group  margin-top-10">
            <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>

            <?php echo $form->passwordField($model, 'password', array(
                'class' => 'form-control placeholder-no-fix',
                'type' => 'password',
                'autocomplete' => 'off',
                'placeholder' => 'senha',
            )); ?>

        </div>
        <?php echo $form->error($model, 'password', array('class' => 'help-block btn-danger')); ?>


        <div class="form-group  hidden">
            <?php echo $form->label($model, 'rememberMe', array('class' => 'control-label visible-ie8 visible-ie9 ')); ?>

            <?php echo $form->checkBox($model, 'rememberMe', array(
                'class' => '',
            )); ?>
            Lembrar


            <?php echo $form->error($model, 'rememberMe', array('class' => 'help-block')); ?>

        </div>
    </div>
    <div class="form-actions">

        <?php echo CHtml::htmlButton('<i class="fa fa-sign-in"></i> Acessar ', array(
            'class' => 'btn blue pull-right',
            'type' => 'submit',
        )); ?>
    </div>



    <?php $this->endWidget(); ?>



    <div class="copyright">
        2014 &copy; Grupo Bandeirantes <br>Vice Presidência de Comercialização<br>Depto. Inteligência de Mercado
    </div>

    <?php
    $cs = Yii::app()->getClientScript();
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/backstretch/jquery.backstretch.min.js', CClientScript::POS_END);
    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/select2/select2.min.js', CClientScript::POS_END);

    $cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/LoginReady.js', CClientScript::POS_END);
    $cs->registerScript('startLoginScript', " LoginReady.init();", CClientScript::POS_READY);
    ?>


