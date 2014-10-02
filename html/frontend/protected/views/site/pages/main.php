<!-- BEGIN STEPS -->
<div class="view-main">
    <div class="row margin-bottom-40">
        <div class="col-md-12 col-sm-12 ">
            <h1>Bem-vindo ao novo Portal de <strong> Inteligência de Mercado!</strong></h1>

            <h2>Agora, para pesquisar você deve seguir apenas <a href=""><strong>3 passos:</strong></a></h2>
        </div>
    </div>
    <div class="row margin-bottom-50 front-steps-wrapper front-steps-count-3">
        <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step1">
                <h2>Escolha o Veículo</h2>

                <p>No Menu superior você pode escolher o veículo de informação que você pretende pesquisar.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step2">
                <h2>Análises</h2>

                <p>Dentro de cada veículo selecionado estarão todos dos painéis de análise que podem ser úteis à ele.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step3">
                <h2>Comercial</h2>

                <p>O material comercial também está dentro de cada veículo, basta filtrar a praça desejada. </p>
            </div>
        </div>
    </div>
    <!-- END STEPS -->


    <!-- BEGIN RECENT WORKS -->
    <div class="row recent-work margin-bottom-60" style="background-color: #fafafa; padding: 5px;">
        <div class="col-md-3">
            <br><br>

            <h2>Painéis Recentes:</h2>

            <p>Estes são os últimos painéis produzidos para auxiliar o seu trabalho.</p>
        </div>
        <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">


                <?php
                $paineis = Analise::model()->findAll(' 11 order by id_analise desc limit 4 ');
//Yii::app()->request->baseUrl
                // CController::createUrl
                foreach ($paineis as $panel) {

                    ?>

                    <div class="recent-work-item" style="margin-right: 5px;">
                        <em style="min-height: 180px; max-height: 180px; overflow: hidden;">
                            <img src="<?php echo Yii::app()->request->baseUrl.'/'. $panel->imagem_analise; ?>" alt="<?php echo $panel->nome_analise ; ?>" class=" img-responsive"
                                 style="border: 2px solid #ccc; min-height: 180px;"  >

                            <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                            <a href="<?php echo Yii::app()->request->baseUrl.'/'. $panel->imagem_analise; ?>" class="fancybox-button" title="<?php echo $panel->nome_analise ; ?>"
                               data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                        </em>
                        <a class="recent-work-description" href="#"  style="border-top: 2px solid #ccc" >
                            <strong><?php echo $panel->nome_analise ; ?></strong>

                        </a>
                    </div>

                <?php
                };?>


            </div>
        </div>
    </div>
    <!-- END RECENT WORKS -->


    <!-- BEGIN CLIENTS -->
    <div class="row margin-bottom-40 our-clients">
        <div class="col-md-3">

            <h2>Pesquisas</h2>

            <p>Estas foram as últimas pesquisas técnicas feitas pelo IM, baixe-os para ter idéias de como proceder com uma defesa.</p>
        </div>
        <div class="col-md-9">
            <div class="owl-carousel owl-carousel6-brands">
                <?php
                $estudos = Estudo::model()->findAll('1=1 order by id_estudo desc limit 8');
                    foreach( $estudos as $est){


                ?>

                <div class="client-item" style=" margin-right: 15px;">
                    <a href="http://docs.google.com/viewer?url=<?php echo Yii::app()->getBaseUrl(true). $est->getLink(); ?>" target="_blank">
                        <img src="<?php echo Yii::app()->request->baseUrl. '/' . $est->clienteIdCliente->imagem_cliente; ?>" class="img-responsive" alt="">
                        <img src="<?php echo Yii::app()->request->baseUrl. '/' . $est->clienteIdCliente->imagem_cliente; ?>" class="color-img img-responsive" alt="">
                        <?php echo $est->nome_estudo ; ?>
                    </a>

                </div>
               <?php  } ;?>



            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function () {
        // Layout.init();
        Layout.initOWL();
//        RevosliderInit.initRevoSlider();
//        Layout.initTwitter();

        /// Layout.initFixHeaderWithPreHeader();
        /* Switch On Header Fixing (only if you have pre-header) */
//        Layout.initNavScrolling();
    });
</script>