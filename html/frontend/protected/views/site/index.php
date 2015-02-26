<!-- Body BEGIN -->

<!-- BEGIN STYLE CUSTOMIZER -->
<div class="color-panel hidden-sm hidden">
    <div class="color-mode-icons icon-color"></div>
    <div class="color-mode-icons icon-color-close"></div>
    <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
            <li class="color-red current color-default" data-style="red"></li>
            <li class="color-blue" data-style="blue"></li>
            <li class="color-green" data-style="green"></li>
            <li class="color-orange" data-style="orange"></li>
            <li class="color-gray" data-style="gray"></li>
            <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
    </div>
</div>

<div class="header btn-primary" style="z-index: 10000;">
    <div class="container">
        <a class="site-logo " href="<?php echo CController::createUrl('index') ; ?>">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/metronic/band/images/logo-grupo3.png" alt="Grupo Bandeirantes" class="site-logo-image">
            <!--            <img src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/metronic/band/images/logo-grupo3.png" alt="Grupo Bandeirantes" class="site-logo-image">-->

        </a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
            <ul>
                <li id="mainMenuHome" class="mainMenuItem active"> <?php echo CHtml::ajaxLink(
                        '<i class="fa fa-home"> </i>Home',
                        CController::createUrl('site/main'),
                        array('type' => 'POST', 'update' => '#container','beforeSend' => 'function(){onClickHome();}')); ?></li>
                <li id="mainMenuVeiculos" class="mainMenuItem dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#" id="btnMenuVeiculos">
                        <i class="fa fa-video-camera"></i> Veículos
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($tags as $tag) {
                            if (sizeof($tag->veiculos) > 0) {
                                ?>

                                <li class="dropdown-submenu">




                                    <?php echo CHtml::ajaxLink(
                                            $tag->nome_tag . '<i class="fa fa-angle-right"></i>',
                                        CController::createUrl('site/listVeiculos&id=' . $tag->id_tag),
                                        array(
                                            'type' => 'POST',

                                            'update' => '#container',
                                            'beforeSend' => 'function(){onClickTag("'.$cores[$tag->ref_tag].'");}'
                                        ),
                                        array('id' =>GUID::getGUID()));?>


                                    <ul class="dropdown-menu" role="menu">
                                        <?php foreach ($tag->veiculos as $veiculo) {
                                            if ($veiculo->ativo_veiculo) {


                                                ?>
                                                <li>
                                                    <?php echo CHtml::ajaxLink(
                                                        CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')) . $veiculo->nome_veiculo,
                                                        CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
                                                        array(
                                                            'type' => 'POST',

                                                            'update' => '#container',
                                                            'beforeSend' => 'function(){onClickVeiculo("'.$cores[$tag->ref_tag].'");}'
                                                        ),
                                                        array('id' =>GUID::getGUID()));?>

                                                </li>
                                            <?php
                                            }
                                        }?>
                                    </ul>
                                </li>
                            <?php
                            }
                        }?>
                    </ul>
                </li>
                <li id="mainMenuNoticias" class="mainMenuItem  dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#" id="btnMenuVeiculos">
                        <i class="fa fa-newspaper-o"></i> Notícias
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach ($noticias as $noticia) { ?>

                            <li class="dropdown-submenu">
                                <?php echo CHtml::ajaxLink(
                                    $noticia->nome_noticia,
                                    CController::createUrl('site/noticias'),
                                    array(
                                        'type' => 'POST',
                                        'update' => '#container',
                                        'data' => array('id_noticia' => $noticia->id_noticia),
                                        'beforeSend' => 'function(){onClickNoticia();}'
                                    ),
                                    array(
                                        'href' => '#' //Yii::app()->createUrl( 'site/noticias' )
                                        ,'id' =>GUID::getGUID()
                                    )
                                );;?>
                            </li>

                        <?php } ?>

                    </ul>
                </li>



<!--                <li id="mainMenuDashBoard" class="mainMenuItem"> --><?php //echo CHtml::ajaxLink(
//                        '<i class="fa fa-line-chart"> </i>Painel',
//                        CController::createUrl('site/dashboard'),
//                        array('type' => 'POST', 'update' => '#container','beforeSend' => 'function(){onClickDashBoard();}')); ?><!--</li>-->



                </li>




                <li> <?php echo CHtml::link('<i class="fa fa-sign-out"> </i>Sair  <small style="font-size: 9px;">('.Yii::app()->user->getName().') </small>', array('site/logout'),array('id' =>GUID::getGUID())); ?>

                </li>
            </ul>
        </div>
        <!-- END NAVIGATION -->
    </div>
</div>
<!-- Header END -->


<div class="main ">
    <div class="container" id="container">
        <?php $this->renderPartial('pages/main', array('tags' => $tags)); ?>
    </div>
</div>

<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer ">
    <div class="container">
        <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-4 col-sm-6 pre-footer-col text-center">
                <p><i class="fa fa-map-marker"></i> Rua Carlos Cirilo Jr, 92<br>CEP: 05614-000 | São Paulo - SP </p>
            </div>
            <!-- END BOTTOM ABOUT BLOCK -->


            <!-- END BOTTOM CONTACTS -->

            <!-- BEGIN TWITTER BLOCK -->
            <div class="   col-md-2 col-md-offset-6  col-sm-6 pre-footer-col text-center">
                <p><i class="fa  fa-envelope"></i> im@band.com.br<br><i class="fa  fa-phone-square"></i> +55 11 3131-7592</p>
            </div>
            <!-- END TWITTER BLOCK -->
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer  ">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-6 col-sm-6 padding-top-10">
                2014 &copy; Grupo Bandeirantes <br>Vice Presidência e Comercialização<br>Depto. Inteligência de Mercado
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN PAYMENTS -->
            <div class="col-md-6 col-sm-6">
                <ul class="social-footer list-unstyled list-inline pull-right">
                    <li><a href="https://pt-br.facebook.com/pages/Grupo-Bandeirantes-De-Comunicacao/195667893810525"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/rede-bandeirantes-de-televis-o"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/GrpBandeirantes"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/user/RedeBandeirantesdeTv"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- END PAYMENTS -->
        </div>
    </div>
</div>


<!-- END FOOTER -->