<ul class="breadcrumb">
    <li><?php echo CHtml::ajaxLink(
            '<i class="fa fa-home"> </i>Home',
            CController::createUrl('site/main'),
            array('type' => 'POST', 'update' => '#container',
                'beforeSend' => 'function(){onClickHome();}'
            ),
            array('id' => GUID::getGUID())); ?>
    </li>


    <li>
        <?php echo CHtml::ajaxLink(
            "Veículo: " . $veiculo->nome_veiculo, //CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')), // . " " . $veiculo->nome_veiculo,
            CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
            array(
                'type' => 'POST',

                'update' => '#container',
                'beforeSend' => 'function(){wait();}'
            ),
            array('id' => GUID::getGUID()));;?>
    </li>


    <?php if (sizeof($veiculo->pracas) > 1) {
        ; ?>

        <li>
            Praça: <?php echo $praca->nome_praca; ?>
        </li>
    <?php }; ?>

</ul>


<?php


$command = Yii::app()->db->createCommand()
    ->select('vpp.fk_id_veiculo , vpp.fk_id_praca, vpp.fk_id_programa,
         pr.id_programa, pr.ref_programa, pr.nome_programa, pr.descricao_programa, pr.imagem_programa,
         concat(vpp.fk_id_veiculo ,"-" , vpp.fk_id_praca, "-",vpp.fk_id_programa ) as k_v_p_p')
    ->from('veiculo_praca_programa vpp ')
    ->join('programa pr', 'vpp.fk_id_programa=pr.id_programa AND pr.ativo_programa=1')
    ->where('vpp.fk_id_veiculo=' . $veiculo->id_veiculo . ' AND  vpp.fk_id_praca = ' . $praca->id_praca);


$dataProgs = $command->queryAll();

?>



<div class="row margin-bottom-40">
<!-- BEGIN CONTENT -->
<div class="col-md-12 col-sm-12">
<div class="row " style="min-height: 80px; margin-bottom:10px;">
    <div class="col-sm-12 ">
        <div class="well text-center">

            <img src="<?php echo Yii::app()->request->baseUrl . '/' . $veiculo['imagem_veiculo']; ?>" style="height: 80px; width: auto; display: inline; " class=""/>
            <?php if (sizeof($veiculo->pracas) > 1) {
                ; ?>
                -
                <div class="strong" style="font-size: 50px;vertical-align: middle;display: inline;"> <?php echo $praca->nome_praca; ?></div>

            <?php }; ?>
        </div>
    </div>

</div>

<div class="content-page">
<div class="row">
<div class="col-md-3 col-sm-3">
    <ul class="tabbable faq-tabbable">
        <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> Análises</a></li>
        <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-dollar"></i> Comercial</a></li>
        <li>
            <?php echo CHtml::ajaxLink(
                '<i class="fa fa-backward"></i> Escolher Outra Praça',
                CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
                array(
                    'type' => 'POST',
                    'update' => '#container',
                    'beforeSend' => 'function(){wait();}'
                ),
                array('id' => GUID::getGUID()));;?>
        </li>
    </ul>

</div>
<div class="col-md-9 col-sm-9">

<div class="tab-content" style="padding:0; background: #fff;">
<!-- START TAB 1 -->


<div class="tab-pane active" id="tab_1">
    <div class="panel-group" id="accordion2">

        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <div class="content-page">
                    <h1>Selecione a análise desejada:</h1>

                    <div class="filter-v1">
                        <ul class="mix-filter hidden ">
                            <li data-filter="all" class="filter active">Todos</li>
                            <?php
                            $tags = Tag::model()->findAll('tipo_tag="analise"');
                            foreach ($tags as $tag) {
                                echo '<li data-filter="' . $tag['ref_tag'] . '"  class="filter">' . $tag['nome_tag'] . '</li>';
                            };?>
                        </ul>
                        <div class="row mix-grid thumbnails" id="<?php echo GUID::getGUID(); ?>">


                            <?php
                            $counter = 0;

                            foreach ($veiculo['analises'] as $anal) {
                                $counter++;
                                $filter = " ";
                                foreach ($anal['tags'] as $anal_tag) {
                                    $filter .= " " . $anal_tag['ref_tag'];
                                };?>

                                <div class=" langs-block-others col-md-4 col-sm-6 mix <?php echo $filter; ?> mix_all"
                                     style="display: block; opacity: 1;
                                     /*border:1px solid #ccc;*/
                                     min-width: 260px; min-height: 205px;
                                     max-width: 260px; max-height: 205px;
                                     overflow: hidden; margin-right: 15px;;
                                     ">
                                    <h4 class="text-center"
                                        style="color:black; background-color: #eee;
                                        margin-bottom:15px; padding-bottom: 10px;
                                        font-weight: 900; color:#666666;"><?php echo $anal['nome_analise']; ?></h4>

                                    <div class="mix-inner">

                                        <img alt="" src="<?php echo Yii::app()->request->baseUrl . '/' . $anal['imagem_analise']; ?>" class="img-responsive"
                                             style="
                                            min-height: 190px;
                                            /*max-height: 130px;*/
                                            ">

                                        <div class="mix-details">
                                            <?php echo CHtml::ajaxLink(
                                                '<i class="fa fa-link"></i> ABRIR',
                                                CController::createUrl('site/analise&id=' . $anal->id_analise .
                                                    '&veiculo=' . $veiculo['id_veiculo'] .
                                                    '&praca=' . $praca['id_praca']),
                                                array(
                                                    'type' => 'POST',
                                                    'update' => '#container',
                                                    'beforeSend' => 'function(){wait();}'
                                                ),
                                                array('id' => GUID::getGUID(),
                                                    'class' => 'mix-link'
                                                ));;?>



                                            <a data-rel="fancybox-button" title="Project Name"
                                               href="<?php echo Yii::app()->request->baseUrl . '/' . $anal['imagem_analise']; ?>" class="mix-preview fancybox-button"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($counter == 6) {
                                   // echo "<div class='well'><h2 style='margin-top:25px;'>Audiência</h2></div>";
                                };?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tab-pane " id="tab_2">
    <div class="panel-group" id="accordion1">


        <?php  if (isset($dataProgs)) {
            foreach ($dataProgs as $prog) {
                ;?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#accordion1_<?php echo $prog['id_programa']; ?>" data-parent="#accordion1" data-toggle="collapse" class="accordion-toggle"
                               style="width: 100%">
                                <img src="<?php echo Yii::app()->request->baseUrl . '/' . $prog['imagem_programa']; ?>" class="imgicon100"/>
                                <?php echo $prog['nome_programa']; ?>
                                <i class="fa fa-eye  fa-2x pull-right" style="margin-top: 27px;"></i>
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse " id="accordion1_<?php echo $prog['id_programa']; ?>">
                        <div class="panel-body">
                            <?php
                            $arqs = Arquivo::model()->findAllByAttributes(array(

                                'fk_id_veiculo' => $veiculo->id_veiculo,
                                'fk_id_praca' => $praca['id_praca'],
                                'fk_id_programa' => $prog['id_programa'],
                            ));?>

                            <?php foreach ($arqs as $arq) {

                                $arq_tipo = $arq['tags'][0]["ref_tag"];;?>


                                <?php
                                switch ($arq_tipo) {
                                    case 'youtube':
                                        break;
                                    case 'vimeo':
                                        ?>
                                        <blockquote style="min-height: 115px;">
                                            <div>
                                            <span class="pull-right">
                                                <iframe src="//player.vimeo.com/video/<?php echo $arq['caminho_arquivo']; ?>" width="200" height="112" webkitallowfullscreen mozallowfullscree allowfullscreen></iframe>
                                            </span>

                                                <h3><?php echo $arq['nome_arquivo']; ?></h3>

                                                <p>Endereço: http://vimeo.com/<?php echo $arq['caminho_arquivo']; ?></p>

                                                <a target='_blank' href='http://vimeo.com/<?php echo $arq['caminho_arquivo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                    <i class='fa fa-share-alt '></i> Abrir no Vimeo</a> -
                                                <a target='blank' href='mailto:?to=&subject=Vídeo%20Band&body=Olá%0AEste%20é%20o%20link%20para%20o%20arquivo:%20<?php echo $arq['nome_arquivo']; ?>.%0A%0Ahttp://vimeo.com/<?php echo $arq['caminho_arquivo']; ?>' class=' btn  btn-primary '
                                                   style="color:white !important">
                                                    <i class='fa fa-envelope-o '></i> Enviar link como E-mail</a>

                                            </div>
                                            <!--                                        </blockquote>-->
                                            <p class="search-link" style="margin-top:8px;">Criado por Admin. (01/09/2014)</p>
                                        </blockquote>
                                        <?php
                                        break;
                                    case 'pdf':
                                        ?>
                                        <blockquote style="">
                                            <div>
                                                <span class='pull-right' style="margin-top: 40px;">
                                                        <a target='_blank' href='<?php echo $arq['caminho_arquivo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                            <i class='fa fa-file-pdf-o '></i> Clique Aqui Para Baixar
                                                        </a>
                                                </span>

                                                <h3><?php echo $arq['nome_arquivo']; ?></h3>

                                                <p>formato: PDF</p>
                                            </div>
                                            <!--                                        </blockquote>-->
                                            <p class="search-link" style="margin-top:8px;">Criado por Admin. (01/09/2014)</p>
                                        </blockquote>
                                        <?php
                                        break;
                                    case 'doc':
                                        ?>
                                        <blockquote style="">
                                            <div>
                                            <span class='pull-right' style="margin-top: 40px;">
                                                        <a target='_blank' href='<?php echo $arq['caminho_arquivo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                            <i class='fa fa-file-word-o '></i> Clique Aqui Para Baixar </a>
                                                </span>
                                            </div>
                                            <h3><?php echo $arq['nome_arquivo']; ?></h3>

                                            <p>formato: Word (.doc, .docx)</p>
                                            <!--                                        </blockquote>-->
                                            <p class="search-link" style="margin-top:8px;">Criado por Admin. (01/09/2014)</p>
                                        </blockquote>
                                        <?php
                                        break;
                                    case 'xls':
                                        ?>
                                        <blockquote style="">
                                            <div>
                                            <span class='pull-right' style="margin-top: 40px;">
                                                        <a target='_blank' href='<?php echo $arq['caminho_arquivo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                            <i class='fa fa-file-excel-o green'></i> Clique Aqui Para Baixar </a>
                                                </span>
                                            </div>
                                            <h3><?php echo $arq['nome_arquivo']; ?></h3>

                                            <p>formato: Excel (.xls, .xlsx)</p>
                                            <!--                                        </blockquote>-->
                                            <p class="search-link" style="margin-top:8px;">Criado por Admin. (01/09/2014)</p>
                                        </blockquote>

                                        <?php
                                        break;
                                    case 'ppt':
                                        ?>
                                        <blockquote style="">
                                            <div>
                                            <span class='pull-right' style="margin-top: 40px;">
                                                        <a target='_blank' href='<?php echo $arq['caminho_arquivo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                            <i class='fa fa-file-powerpoint-o  purple '></i> Clique Aqui Para Baixar </a>
                                                </span>
                                            </div>
                                            <h3><?php echo $arq['nome_arquivo']; ?></h3>

                                            <p>formato: PowerPoint (.ppt, .pptx)</p>

                                            <p class="search-link" style="margin-top:8px;">Criado por Admin. (01/09/2014)</p>
                                        </blockquote>
                                        <?php
                                        break;
                                }
                                ?>


                            <?php }; ?>
                        </div>
                    </div>
                </div>


            <?php
            }
        };?>


    </div>
</div>
<!-- END TAB 1 -->
<!-- START TAB 2 -->

<!-- END TAB 3 -->
</div>
</div>
</div>
</div>
</div>
</div>

<script type="application/javascript">

    $(document).ready(function () {
        setTimeout(function () {
            Portfolio.init();
        }, 1000)

    })
</script>
