<?php
$this->beginContent('//layouts/_headerMetronic');
$this->endContent();
$this->beginContent('//layouts/_themeStylesMetronic');
$this->endContent();
?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?php echo Yii::app()->createUrl("/site"); ?>">
                <img src="metronic/band/images/logo-grupo.png" alt="logo" class="" style="height: 35px; width: auto; margin-top: 5px;"/>
            </a>

        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN TODO DROPDOWN -->
                <li class="dropdown dropdown-extended dropdown-tasks hidden" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-calendar"></i>
                        <span class="badge badge-default">3 </span></a>

                </li>
                <!-- END TODO DROPDOWN -->

                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </li>

                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown dropdown-user">
                    <div class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

					<span class="username username-hide-on-mobile">
					admin </span>
                        <i class="fa fa-gear"></i>
                    </div>

                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="<?php echo Yii::app()->createUrl("/site/logout"); ?>" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>

                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu " data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="start  active open">
                <a href="javascript:;">
                    <i class="icon-drawer"></i>
                    <span class="title">Cadastros</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/veiculo/admin"); ?>">
<!--                            <span class="badge badge-roundless badge-danger">new</span>-->
                            <i class="icon-screen-desktop"></i> Veículo</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/analise/admin"); ?>">
                            <i class="icon-graph"></i> Análise</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/praca/admin"); ?>">
                            <i class="icon-compass"></i> Praças</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/programa/admin"); ?>">
                            <i class="icon-social-youtube"></i> Prog. & Cont.</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/arquivo/admin"); ?>">
                            <i class="icon-docs"></i> Arquivos</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/tag/admin"); ?>">
                            <i class="icon-tag"></i> Tags</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/cliente/admin"); ?>">
                            <i class="icon-users"></i> Clientes</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/estudo/admin"); ?>">
                            <i class="icon-briefcase"></i> Estudos</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl("/noticia/admin"); ?>">
                            <i class="icon-feed"></i> Notícias</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl("/log/admin"); ?>">
                    <i class="icon-list"></i> Logs</a>

            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">


        <div class="row">
            <div class="col-sm-12">
                <?php echo $content;?>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Grupo Bandeirantes - Inteligência de Mercado.
    </div>
    <div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
    </div>
</div>


<?php
$this->beginContent('//layouts/_footerMetronic');
$this->endContent();

$footerClientScript = Yii::app()->getClientScript();
$footerClientScript->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/MetronicMenu.js', CClientScript::POS_END);
//$footerClientScript->registerScript('metronicMenuStart',"MetronicMenu.init();", CClientScript::POS_READY);



?>
