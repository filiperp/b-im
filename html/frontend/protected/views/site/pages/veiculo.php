<div class=" " id="frame_result" style="display: none; position: fixed; top:74px; z-index: 1000;width: 400px;right: 0px;">

    <div class="btn btn-info" style="right: 7px; position: absolute; top:8px; " id="btn_close_frame_result"><i class="fa fa-close"></i></div>
    <iframe id="uploader_iframe" scrolling="no" name="uploader_iframe" style="display: block; overflow: hidden; width: 100%; height: 45px; border: none !important;overflow-style: panner;"></iframe>


</div>

<ul class="breadcrumb">
    <li><?php echo CHtml::ajaxLink(
            '<i class="fa fa-video-camera"> </i> '. $tag['nome_tag'],
            CController::createUrl('site/listVeiculos&id=' . $tag['id_tag']),
            array('type' => 'POST', 'update' => '#container',
                'beforeSend' => 'function(){onClickHome();}'
            ),
            array('id' => GUID::getGUID())); ?>
    </li>


    <li>
        <?php echo CHtml::ajaxLink(
            ' <i class="fa fa-youtube-play"></i> '. $veiculo->nome_veiculo, //CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')), // . " " . $veiculo->nome_veiculo,
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

            <i class="fa fa-map-marker"></i> <?php echo $praca->nome_praca; ?>
        </li>
    <?php }; ?>

</ul>


<?php


$command = Yii::app()->db->createCommand()
    ->select('vpp.fk_id_veiculo , vpp.fk_id_praca, vpp.fk_id_programa,
         pr.id_programa, pr.ref_programa, pr.nome_programa, pr.descricao_programa, pr.imagem_programa,pr.ativo_programa,
         concat(vpp.fk_id_veiculo ,"-" , vpp.fk_id_praca, "-",vpp.fk_id_programa ) as k_v_p_p')
    ->from('veiculo_praca_programa vpp ')
    ->join('programa pr', 'vpp.fk_id_programa=pr.id_programa AND pr.ativo_programa=1')
    ->where('vpp.fk_id_veiculo=' . $veiculo->id_veiculo . ' AND  vpp.fk_id_praca = ' . $praca->id_praca)
    ->order('pr.nome_programa');


$dataProgs = $command->queryAll();

?>



<div class="row margin-bottom-40">

    <div class="col-md-12 col-sm-12">
        <div class="row " style="min-height: 80px; margin-bottom:10px;">
            <div class="col-sm-12 ">
                <div class=" text-center veiculo-title " style="background-color: #fff;margin-bottom: 15px;">

                    <img src="<?php echo Yii::app()->request->baseUrl . '/' . $veiculo['imagem_veiculo']; ?>" style="height: 80px; width: auto; display: inline; " class=""/>
                    <?php if (sizeof($veiculo->pracas) > 1) {
                        ; ?>

                        <div class="strong" style="font-size: 50px;vertical-align: middle;display: inline;"> <?php echo $praca->nome_praca; ?></div>

                    <?php }; ?>
                </div>
            </div>

        </div>

        <div class="content-page">

            <div class="row">
              <div class="col-md-3 col-sm-3">
                <ul class="tabbable faq-tabbable">
                    <li class="<?php echo $menu=='analises'?'active':'' ; ?>"><a href="#tab_1" data-toggle="tab"><i class="fa fa-bar-chart-o"></i> Análises</a></li>
                    <li class="<?php echo $menu=='comercial'?'active':'' ; ?>"><a href="#tab_2" data-toggle="tab"><i class="fa fa-dollar"></i> Comercial</a></li>
                    <li class="<?php echo $menu=='estudos'?'active':'' ; ?>"><a href="#tab_3" data-toggle="tab"><i class="fa fa-briefcase"></i> Estudos</a></li>
                    <li>
                        <?php

                        if (count($veiculo->pracas) > 1) {
                            echo CHtml::ajaxLink(
                                '<i class="fa fa-backward"></i> Escolher Outra Praça',
                                CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
                                array(
                                    'type' => 'POST',
                                    'update' => '#container',
                                    'beforeSend' => 'function(){wait();}'
                                ),
                                array('id' => GUID::getGUID()));
                        } else {
                            echo CHtml::ajaxLink(
                                '<i class="fa fa-backward"></i> Escolher Outro Veículo',
                                CController::createUrl('site/listVeiculos&id=' .$tag['id_tag']),
                                array(
                                    'type' => 'POST',

                                    'update' => '#container',
                                    'beforeSend' => 'function(){wait();}'
                                ),
                                array('id' => GUID::getGUID()));
                        }

                        ?>
                    </li>
                </ul>


            </div>
            <div class="col-md-9 col-sm-9" style="padding-right: 0px;">

            <div class="tab-content" style="padding:0; background: #fff;">


            <div class="tab-pane <?php echo $menu=='analises'?'active':'' ; ?>" id="tab_1">
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

                                        foreach ($veiculo['analises'] as $anal) {
                                            if ($anal->ativo_analise) {
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
                                                                    'class' => 'mix-link',
                                                                    'style' => 'color:#fff;'
                                                                ));;?>



                                                            <a data-rel="fancybox-button" title="<?php echo $anal['nome_analise']; ?>" style="color:#fff"
                                                               href="<?php echo Yii::app()->request->baseUrl . '/' . $anal['imagem_analise']; ?>" class="mix-preview fancybox-button"><i
                                                                    class="fa fa-search"></i> VER</a>
                                                        </div>
                                                    </div>
                                                </div>


                                            <?php
                                            }
                                        }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane <?php echo $menu=='comercial'?'active':'' ; ?>" id="tab_2">
                <div class="panel-group" id="accordion1">

                    <div id="btn-upload-comercial"
                         style="display: inline; color:red !important;
                         border:1px solid red;padding-left:3px;padding-right:3px;
                         top: -19px;
                        right: 15px;
                        position: absolute;
                        cursor:hand;
                        cursor:pointer;">
                        <i class='fa fa-gear '></i></div>
                    <div class="panel-body">
                    <?php  if (isset($dataProgs)) {
                        foreach ($dataProgs as $prog) {
                            if ($prog['ativo_programa']) {
                                $extraClass = strlen($prog['nome_programa'])>20?' double ': '';
                                echo CHtml::ajaxLink(
                                    '
                                        <div class=" row ">
                                            <div style="padding:0px 10px;" class="product-item">
                                                 <div  style="display:block; height:110px;" class="well add2cart">
                                                        <img style="width:111px; height:auto;border:1px solid #ddd; background-color:#fff; " src="' . $prog['imagem_programa'] . '">
                                                        <div style="display:block; margin-left:120px; margin-top:-70px;">
                                                        <h4  style="">'
                                                             .$prog['nome_programa'] .
                                                        '</h4></div>
                                                 </div>
                                            </div>
                                        </div>
                                   ',
                                    CController::createUrl('site/veiculo&id=' . $prog['id_programa'] ),//. '&idPraca=' . $praca->id_praca),
                                    array(
                                        'type' => 'POST',
                                        'update' => '#container',
                                        'beforeSend' => 'function(){wait();}'
                                    ),
                                    array('id' => GUID::getGUID(), 'class' => 'col-lg-6 col-md-6 '));
                            }
                        }
                    };?>
                    </div>
                </div>
            </div>


            <div class="tab-pane <?php echo $menu=='estudos'?'active':'' ; ?> " id="tab_3">
                <div class="panel-group" id="accordion2">

                    <div class="row margin-bottom-40">
                        <!-- BEGIN CONTENT -->
                        <div class="col-md-12 col-sm-12">
                            <div class="content-page">
                                <h1>Estudos realizados pelo departamento de Inteligência:</h1>

                                <?php

                                $commandClient = Yii::app()->db->createCommand()
                                    ->selectDistinct('c.id_cliente,
                                                c.ref_cliente,
                                                c.nome_cliente,
                                                c.imagem_cliente  ')
                                    ->from('estudo  as e')
                                    ->join('cliente as  c', 'e.cliente_id_cliente = c.id_cliente ')
                                    ->join('veiculo_has_estudo as vhe', 'vhe.estudo_id_estudo = e.id_estudo ')
                                    ->where(" e.ativo_estudo=1 and vhe.veiculo_id_veiculo =" . $veiculo->id_veiculo)
                                    ->order(' c.nome_cliente, e.nome_estudo ');


                                $clientes = $commandClient->queryAll();


                                if (isset($clientes)) {
                                    foreach ($clientes as $cli) {

                                        ;?>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#accordion2_<?php echo $cli['id_cliente']; ?>" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle"
                                                       style="width: 100%">
                                                        <img src="<?php echo Yii::app()->request->baseUrl . '/' . $cli['imagem_cliente']; ?>" class="imgicon100"/>
                                                        <?php echo $cli['nome_cliente']; ?>
                                                        <i class="fa fa-eye  fa-2x pull-right" style="margin-top: 27px;"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse " id="accordion2_<?php echo $cli['id_cliente']; ?>">
                                                <div class="panel-body">
                                                    <?php
                                                    $commandEstudo = Yii::app()->db->createCommand()
                                                        ->select('e.id_estudo ')
                                                        ->from('estudo e  ')
                                                        ->join('cliente c', 'e.cliente_id_cliente = c.id_cliente ')
                                                        ->join('veiculo_has_estudo vhe', 'vhe.estudo_id_estudo = e.id_estudo ')
                                                        ->where(" e.ativo_estudo=1 and vhe.veiculo_id_veiculo =" . $veiculo->id_veiculo . " and c.id_cliente= " . $cli['id_cliente'])
                                                        ->order('c.nome_cliente, e.nome_estudo ');


                                                    $idEstudos = $commandEstudo->queryAll();

                                                    foreach ($idEstudos as $idEstudo) {
                                                        $estudo = Estudo::model()->findByPk($idEstudo['id_estudo']);

                                                        $arq_tipo = isset($estudo['tags'][0]["ref_tag"]) ? $estudo['tags'][0]["ref_tag"] : 'pdf';

                                                        ?>

                                                        <blockquote style="min-height: 115px;">
                                                            <?php
                                                            switch ($arq_tipo) {
                                                                case 'youtube':
                                                                    ?>


                                                                    <div>
                                                                                <span class="pull-right">
                                                                                    <iframe src="//www.youtube.com/embed/<?php echo $estudo['caminho_estudo']; ?>
                                                                                    " width="200" height="112" webkitallowfullscreen mozallowfullscree allowfullscreen></iframe>
                                                                                </span>

                                                                        <h2 style="font-weight:300; text-decoration: underline"><?php echo $estudo['nome_estudo']; ?></h2>

                                                                        <h4>Endereço: http://vimeo.com/<?php echo $estudo['caminho_estudo']; ?></h4>

                                                                        <a target='_blank' href='http://www.youtube.com/watch?v=<?php echo $estudo['caminho_estudo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                                            <i class='fa fa-share-alt '></i> Abrir no Vimeo</a> -
                                                                        <a target='blank' href='mailto:?to=&subject=Vídeo%20Band&body=Olá%0AEste%20é%20o%20link%20para%20o%20arquivo:%20<?php echo $estudo['nome_estudo']; ?>.%0A%0Ahttp://www.youtube.com/watch?v=<?php echo $estudo['caminho_estudo']; ?>'
                                                                           class=' btn  btn-primary '
                                                                           style="color:white !important">
                                                                            <i class='fa fa-envelope-o '></i> Enviar link como E-mail</a>

                                                                    </div>
                                                                    <?php
                                                                    break;
                                                                case 'vimeo':
                                                                    ?>
                                                                    <div>
                                                                        <span class="pull-right">
                                                                            <iframe src="//player.vimeo.com/video/<?php echo $estudo['caminho_estudo']; ?>
                                                                            " width="200" height="112" webkitallowfullscreen mozallowfullscree allowfullscreen></iframe>
                                                                        </span>

                                                                        <h2 style="font-weight:300; text-decoration: underline"><?php echo $estudo['nome_estudo']; ?></h2>

                                                                        <h4>Endereço: http://vimeo.com/<?php echo $estudo['caminho_estudo']; ?></h4>

                                                                        <a target='_blank' href='http://vimeo.com/<?php echo $estudo['caminho_estudo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                                            <i class='fa fa-share-alt '></i> Abrir no Vimeo</a> -
                                                                        <a target='blank' href='mailto:?to=&subject=Vídeo%20Band&body=Olá%0AEste%20é%20o%20link%20para%20o%20arquivo:%20<?php echo $estudo['nome_estudo']; ?>.%0A%0Ahttp://vimeo.com/<?php echo $estudo['caminho_estudo']; ?>'
                                                                           class=' btn  btn-primary '
                                                                           style="color:white !important">
                                                                            <i class='fa fa-envelope-o '></i> Enviar link como E-mail</a>

                                                                    </div>
                                                                    <!--                                        </blockquote>-->

                                                                    <?php
                                                                    break;
                                                                case 'pdf':
                                                                    ?>
                                                                    <div>
                                                                        <span class='pull-right' style="margin-top: 40px;">
                                                                                <a target='_blank' href='<?php echo $estudo['caminho_estudo']; ?>' class=' btn  btn-primary ' style="color:white !important">
                                                                                    <i class='fa fa-file-pdf-o '></i> Clique Aqui Para Baixar
                                                                                </a>
                                                                        </span>

                                                                        <h2 style="font-weight:300; text-decoration: underline"><?php echo $estudo['nome_estudo']; ?></h2>

                                                                        <h4>formato: PDF</h4>
                                                                    </div>
                                                                    <!--                                        </blockquote>-->

                                                                    <?php
                                                                    break;
                                                                case 'doc':
                                                                    ?>
                                                                    <div>
                                                                        <span class='pull-right' style="margin-top: 40px;">
                                                                                    <a target='_blank' href='<?php echo $estudo['caminho_estudo']; ?>'
                                                                                       class=' btn  btn-primary ' style="color:white !important">
                                                                                        <i class='fa fa-file-word-o '></i> Clique Aqui Para Baixar </a>
                                                                            </span>
                                                                    </div>
                                                                    <h2 style="font-weight:300; text-decoration: underline"><?php echo $estudo['nome_estudo']; ?></h2>

                                                                    <h4>formato: Word (.doc, .docx)</h4>
                                                                    <!--                                        </blockquote>-->

                                                                    <?php
                                                                    break;
                                                                case 'xls':
                                                                    ?>
                                                                    <div>
                                                                    <span class='pull-right' style="margin-top: 40px;">
                                                                                <a target='_blank' href='<?php echo $estudo['caminho_estudo']; ?>'
                                                                                   class=' btn  btn-primary ' style="color:white !important">
                                                                                    <i class='fa fa-file-excel-o green'></i> Clique Aqui Para Baixar </a>
                                                                        </span>
                                                                    </div>
                                                                    <h2 style="font-weight:300; text-decoration: underline"><?php echo $estudo['nome_estudo']; ?></h2>

                                                                    <h4>formato: Excel (.xls, .xlsx)</h4>
                                                                    <!--                                        </blockquote>-->


                                                                    <?php
                                                                    break;
                                                                case 'ppt':
                                                                    ?>
                                                                    <div>
                                                                    <span class='pull-right' style="margin-top: 40px;">
                                                                                <a target='_blank' href='<?php echo $estudo['caminho_estudo']; ?>'
                                                                                   class=' btn  btn-primary ' style="color:white !important">
                                                                                    <i class='fa fa-file-powerpoint-o  purple '></i> Clique Aqui Para Baixar </a>
                                                                        </span>
                                                                    </div>
                                                                    <h2 style="font-weight:300; text-decoration: underline"><?php echo $estudo['nome_estudo']; ?></h2>
                                                                    <h4>formato: PowerPoint (.ppt, .pptx)</h4>


                                                                    <?php
                                                                    break;
                                                            }
                                                            ?>
                                                            <!--                                            <p class="search-link" style="margin-top:8px;">Atualizado por --><?php //echo $estudo['usuario']; ?><!-- - (--><?php //echo $estudo['data']; ?><!--)</p>-->
                                                        </blockquote>

                                                    <?php }; ?>
                                                </div>
                                            </div>
                                        </div>


                                    <?php

                                    }
                                };?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            </div>
            </div>
        </div>
    </div>
</div>


<div id="modalUploadFile" class="modal fade" style="">
    <div class="modal-dialog" style="max-width: 500px;float: right; min-width: 500px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title">Atualização de Arquivo</h2></div>
            <div class="modal-body">
                <div class="bootbox-body">


                    <form enctype="multipart/form-data" id="veiculo-form" target="uploader_iframe" action="<?php echo Yii::app()->createUrl("site/uploadFile"); ?>" method="post">

                        <div class="form-group">
                            <div class="  col-md-4 bold">Programa:</div>

                            <div class="col-md-8 ">
                                <div class="" id="nomePrograma"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="  col-md-4 bold">ID Arquivo:</div>

                            <div class="col-md-8 ">
                                <div class="" id="idArquivo"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="  col-md-4  bold ">Nome:</div>

                            <div class="col-md-8">
                                <div class="" id="nomeArquivo"></div>
                            </div>
                        </div>


                        <div class="form-group" id="g_image">
                            <label class="  col-md-4 control-label bold" for="Veiculo_image">Arquivo:</label>

                            <div class="col-md-8">

                                <input name="Arquivo[image]" id="Arquivo_image" type="file">
                            </div>
                        </div>

                        <div class="form-group" id="g_text">
                            <label class="  col-md-4 control-label bold" for="Arquivo_caminho_arquivo">Arquivo:</label>

                            <div class="col-md-8">

                                <input name="Arquivo[caminho_arquivo]" id="Arquivo_caminho_arquivo" type="text">
                            </div>
                        </div>


                        <input name="Arquivo[id_arquivo]" id="Arquivo_fk_id_arquivo" type="hidden">

                        <div class="row ">
                            <div class="col-md-12 ">
                                <input id="btn-upload-file" class=" btn blue pull-right" type="submit" name="yt0" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>


<script type="application/javascript">

    $(document).ready(function () {
        setTimeout(function () {
            Portfolio.init();
        }, 1000);

        $('#btn-upload-comercial').unbind('click').on('click', function () {
            $('.input-file-item').toggle();
        });

//        $('.btn-upload-item').unbind('click').on('click',function(){
//
//
//        })


        $("#btn-upload-file").on("click", function (e) {
            console.log("button pressed");   // just as an example...
            $('#frame_result').show();
            $("#modalUploadFile").modal('hide');     // dismiss the dialog
        });

        $('#btn_close_frame_result').unbind('click').on('click', function () {
            $('#frame_result').fadeOut();
        });

        $("#modalUploadFile").on("hide", function () {    // remove the event listeners when the dialog is dismissed
            $("#btn-enviar-file").off("click");
        });

        $("#modalUploadFile").on("hidden", function () {  // remove the actual elements from the DOM when fully hidden
            $("#modalUploadFile").remove();
        });


    })


    function onClickUploadFile(prog, arq, id, tipo) {
        console.log(prog, arq, id);
        $('#g_image').hide();
        $('#g_text').hide();
        switch (tipo) {
            case "pdf":
                $('#Arquivo_image').attr('accept', '.pdf');
                $('#g_image').show();
                break;
            case "doc":
                $('#Arquivo_image').attr('accept', '.doc,.docx');
                $('#g_image').show();

                break;
            case "xls":
                $('#Arquivo_image').attr('accept', '.xls,.xlsx');
                $('#g_image').show();

                break;
            case "ppt":
                $('#Arquivo_image').attr('accept', '.ppt,.pptx');
                $('#g_image').show();

                break;
            case "vimeo":
            case "youtube":
                $('#g_text').show();
                break;

        }
        $('#nomeArquivo').html(arq);
        $('#idArquivo').html(id);
        $('#nomePrograma').html(prog);

        $('#Arquivo_image').replaceWith($('#Arquivo_image').val('').clone(true));
        $('#Arquivo_fk_id_arquivo').val(id);
        $("#modalUploadFile").modal({                    // wire up the actual modal functionality and show the dialog
            //  "backdrop"  : "static",
            "keyboard": true
            // "show"      : true                     // ensure the modal is shown immediately
        });
    }


</script>
