<div class=" " id="frame_result"
     style="display: none; position: fixed; top:74px; z-index: 1000;width: 400px;right: 0px;">

    <div class="btn btn-info" style="right: 7px; position: absolute; top:8px; " id="btn_close_frame_result"><i
            class="fa fa-close"></i></div>
    <iframe id="uploader_iframe" scrolling="no" name="uploader_iframe"
            style="display: block; overflow: hidden; width: 100%; height: 45px; border: none !important;overflow-style: panner;"></iframe>


</div>

<ul class="breadcrumb">
    <li><?php echo CHtml::ajaxLink(
            '<i class="fa fa-video-camera"> </i> ' . $tag['nome_tag'],
            CController::createUrl('site/main'),
            array('type' => 'POST', 'update' => '#container',
                'beforeSend' => 'function(){wait();}'
            ),
            array('id' => GUID::getGUID())); ?>
    </li>


    <li>
        <?php echo CHtml::ajaxLink(
            ' <i class="fa fa-youtube-play"></i> ' . $veiculo->nome_veiculo, //CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')), // . " " . $veiculo->nome_veiculo,
            CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
            array(
                'type' => 'POST',

                'update' => '#container',
                'beforeSend' => 'function(){wait();}'
            ),
            array('id' => GUID::getGUID()));; ?>
    </li>
    <?php if (sizeof($veiculo->pracas) > 1) {
        ?>
        <li>
            <?php
            echo CHtml::ajaxLink(
                ' <i class="fa fa-map-marker"></i> ' . $praca->nome_praca,

                CController::createUrl('site/veiculo&menu=comercial&id=' . $veiculo->id_veiculo . '&idPraca=' . $praca->id_praca),
                array(
                    'type' => 'POST',
                    'update' => '#container',
                    'beforeSend' => 'function(){wait();}'
                ),
                array('id' => GUID::getGUID(), 'class' => '',
                    'style' => '')) ?>


        </li>
    <?php }; ?>
    <?php if (sizeof($veiculo->pracas) > 1) {
        ; ?>

        <li><i class="fa fa-play"></i>
            <?php echo $programa->nome_programa; ?>
        </li>
    <?php }; ?>

</ul>


<div class="row " style="   min-height: 80px; margin-bottom:10px;">
    <div class="col-sm-12 well ">
        <?php
        echo CHtml::ajaxLink(
            '<i class="fa fa-reply"></i> Voltar aos programas',

            CController::createUrl('site/veiculo&menu=comercial&id=' . $veiculo->id_veiculo . '&idPraca=' . $praca->id_praca),
            array(
                'type' => 'POST',
                'update' => '#container',
                'beforeSend' => 'function(){wait();}'
            ),
            array('id' => GUID::getGUID(), 'class' => 'btn btn-primary pull-left',
                'style' => 'position:absolute;')) ?>
        <div class="text-center">
            <h2 style="vertical-align: middle;display: inline;"><span
                    class="small"></span> <?php echo $programa->nome_programa; ?></h2>
        </div>


        <div id="btn-upload-comercial"
             style="display: inline; color:red !important;
                         border:1px solid red;padding-left:3px;padding-right:3px;
                         top: -19px;
                        right: 15px;
                        position: absolute;
                        cursor:hand;
                        cursor:pointer;">
            <i class='fa fa-gear '></i>
        </div>

    </div>

</div>


<div class="row" style="text-align: center;">
    <div class="col-sm-12 col-md-12 col-lg-12">


        <div class="panel-body">
            <?php


            foreach ($arquivos as $arq) {
                if ($arq['ativo_arquivo']) {

                    $arq_tipo = isset($arq['tags'][0]["ref_tag"]) ? $arq['tags'][0]["ref_tag"] : 'pdf';

                    ?>
                    <div class="col-sm-12 col-md-12 col-lg-12 note <?php echo $coresNotes[$tag->ref_tag]; ?>"
                         style="text-align: left;min-height: 115px;">

                        <?php
                        switch ($arq_tipo) {
                            case 'youtube':
                                ?>
                                <span class="pull-right">
                                    <iframe src="//www.youtube.com/embed/<?php echo $arq['caminho_arquivo']; ?>
                                    " width="200" height="112" webkitallowfullscreen mozallowfullscree allowfullscreen
                                            style="border: none;margin-top:15px;"></iframe>
                                </span>

                                <h2 style="font-weight:300; "><?php echo $arq['nome_arquivo']; ?></h2>
                                <hr>
                                <h4>Endereço: https://www.youtube.com/watch?v<?php echo $arq['caminho_arquivo']; ?></h4>

                                <a target='_blank'
                                   href='https://www.youtube.com/watch?v=<?php echo $arq['caminho_arquivo']; ?>'
                                   class=' btn  btn-primary ' style="color:white !important;margin-right:5px;">
                                    <i class='fa fa-share-alt '></i> Abrir no Youtube</a>
                                <a target='blank'
                                   href='mailto:?to=&subject=Vídeo%20Band&body=Olá%0AEste%20é%20o%20link%20para%20o%20arquivo:%20<?php echo $arq['nome_arquivo']; ?>.%0A%0Ahttps://www.youtube.com/watch?v=<?php echo $arq['caminho_arquivo']; ?>'
                                   class=' btn  btn-primary ' style="color:white !important">
                                    <i class='fa fa-envelope-o '></i> Enviar link como E-mail
                                </a>
                                <?php
                                break;
                            case 'vimeo':
                                ?>
                                <span class="pull-right">
                                    <iframe src="//player.vimeo.com/video/<?php echo $arq['caminho_arquivo']; ?>
                                    " width="200" height="112" webkitallowfullscreen mozallowfullscree allowfullscreen
                                            style="border: none;margin-top:15px;"></iframe>
                                </span>
                                <h2 style="font-weight:300; "><?php echo $arq['nome_arquivo']; ?></h2>
                                <hr>
                                <h4>Endereço: https://vimeo.com/<?php echo $arq['caminho_arquivo']; ?></h4>
                                <a target='_blank' href='https://vimeo.com/<?php echo $arq['caminho_arquivo']; ?>'
                                   class=' btn  btn-primary ' style="color:white !important; margin-right:5px;">
                                    <i class='fa fa-share-alt '></i> Abrir no Vimeo</a>
                                <a target='blank'
                                   href='mailto:?to=&subject=Vídeo%20Band&body=Olá%0AEste%20é%20o%20link%20para%20o%20arquivo:%20<?php echo $arq['nome_arquivo']; ?>.%0A%0Ahttps://vimeo.com/<?php echo $arq['caminho_arquivo']; ?>'
                                   class=' btn  btn-primary ' style="color:white !important">
                                    <i class='fa fa-envelope-o '></i> Enviar link como E-mail
                                </a>
                                <?php
                                break;
                            case 'pdf':
                                ?>
                                <span class='pull-right' style="margin-top: 40px;">
                                    <i class="fa fa-file-pdf-o fa-5x" style="color:#888888;"></i>
                                </span>
                                <h2 style="font-weight:300; "><?php echo $arq['nome_arquivo']; ?></h2>
                                <hr>
                                <h4>Formato: PDF</h4>
                                <a target='_blank'
                                   href='<?php echo $arq['caminho_arquivo']; ?>?rand=<?php echo rand();?>  '
                                   class=' btn  btn-primary ' style="color:white !important margin-right:5px;">
                                    <i class='fa fa-file-pdf-o '></i> Baixar o arquivo
                                </a>
                                <!--                                <a href="--><?php //echo Yii::app()->getBaseUrl(true) . $arq->getLink();
                                ?><!--" target="_blank"-->
                                <!--                                   class=' btn  btn-primary ' style="color:white !important" >-->
                                <!--                                   <i class="fa fa-google-plus-square "></i> Abrir No Navegador-->
                                <!--                                </a>-->
                                <?php
                                break;
                            case 'doc':
                                ?>
                                <span class='pull-right' style="margin-top: 40px;">
                                    <i class="fa fa-file-pdf-o fa-5x" style="color:#888888;"></i>
                                </span>
                                <h2 style="font-weight:300; "><?php echo $arq['nome_arquivo']; ?></h2>
                                <hr>
                                <h4>Formato: Word (.doc, .docx)</h4>
                                <a target='_blank'
                                   href='<?php echo $arq['caminho_arquivo']; ?>?rand=<?php echo rand();?>  '
                                   class=' btn  btn-primary ' style="color:white !important margin-right:5px;">
                                    <i class='fa fa-file-pdf-o '></i> Baixar o arquivo
                                </a>
                                <a href="https://docs.google.com/viewer?url=<?php echo Yii::app()->getBaseUrl(true) . $arq->getLink(); ?>"
                                   target="_blank"
                                   class=' btn  btn-primary ' style="color:white !important">
                                    <i class="fa fa-google-plus-square "></i> Abrir no Google Docs
                                </a>
                                <?php
                                break;
                            case 'xls':
                                ?>
                                <span class='pull-right' style="margin-top: 40px;">
                                    <i class="fa fa-file-pdf-o fa-5x" style="color:#888888;"></i>
                                </span>
                                <h2 style="font-weight:300; "><?php echo $arq['nome_arquivo']; ?></h2>
                                <hr>
                                <h4>Formato: Excel (.xls, .xlsx)</h4>
                                <a target='_blank'
                                   href='<?php echo $arq['caminho_arquivo']; ?>?rand=<?php echo rand();?>  '
                                   class=' btn  btn-primary ' style="color:white !important margin-right:5px;">
                                    <i class='fa fa-file-pdf-o '></i> Baixar o arquivo
                                </a>
                                <a href="https://docs.google.com/viewer?url=<?php echo Yii::app()->getBaseUrl(true) . $arq->getLink(); ?>"
                                   target="_blank"
                                   class=' btn  btn-primary ' style="color:white !important">
                                    <i class="fa fa-google-plus-square "></i> Abrir no Google Docs
                                </a>
                                <?php
                                break;
                            case 'ppt':
                                ?>
                                <span class='pull-right' style="margin-top: 40px;">
                                    <i class="fa fa-file-pdf-o fa-5x" style="color:#888888;"></i>
                                </span>
                                <h2 style="font-weight:300; "><?php echo $arq['nome_arquivo']; ?></h2>
                                <hr>
                                <h4>Formato: PowerPoint (.ppt, .pptx)</h4>
                                <a target='_blank'
                                   href='<?php echo $arq['caminho_arquivo']; ?>?rand=<?php echo rand();?>  '
                                   class=' btn  btn-primary ' style="color:white !important margin-right:5px;">
                                    <i class='fa fa-file-pdf-o '></i> Baixar o arquivo
                                </a>
                                <a href="https://docs.google.com/viewer?url=<?php echo Yii::app()->getBaseUrl(true) . $arq->getLink(); ?>"
                                   target="_blank"
                                   class=' btn  btn-primary ' style="color:white !important">
                                    <i class="fa fa-google-plus-square "></i> Abrir no Google Docs
                                </a>
                                <?php
                                break;
                            case 'zip':
                                ?>
                                <span class='pull-right' style="margin-top: 40px;">
                                    <i class="fa fa-file-zip-o fa-5x" style="color:#888888;"></i>
                                </span>
                                <h2 style="font-weight:300; "><?php echo $arq['nome_arquivo']; ?></h2>
                                <hr>
                                <h4>Formato: ZIP </h4>
                                <a target='_blank'
                                   href='<?php echo $arq['caminho_arquivo']; ?>?rand=<?php echo rand();?>  '
                                   class=' btn  btn-primary ' style="color:white !important margin-right:5px;">
                                    <i class='fa fa-file-zip-o '></i> Baixar o arquivo
                                </a>

                                <?php
                                break;

                        }
                        ?>

                        <div class="input-file-item" style="display: none;cursor: pointer;
                                                            right: -43px;
                                                            position: absolute;
                                                            top: 0px; cursor:hand; cursor:pointer">

                            <div class="btn btn-danger  btn-upload-item"
                                 onclick="onClickUploadFile(
                                     '<?php echo $programa['nome_programa']; ?>',
                                     '<?php echo $arq['nome_arquivo']; ?>',
                                     '<?php echo $arq['id_arquivo']; ?>',
                                     '<?php echo $arq_tipo; ?>'
                                     )">
                                <i class="fa fa-cloud-upload"></i>
                            </div>


                        </div>


                        <p class="search-link" style="margin-top:8px;">Atualizado por <?php echo $arq['usuario']; ?> -
                            (<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $arq['data'])->format('d-m-Y H:i:s '); ?>
                            )</p>


                    </div>
                <?php }
            }; ?>
        </div>


    </div>

</div>


<div id="modalUploadFile" class="modal fade" style="">
    <div class="modal-dialog" style="max-width: 500px;float: right; min-width: 500px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h2 class="modal-title">Atualização de Arquivo</h2></div>
            <div class="modal-body">
                <div class="bootbox-body">


                    <form enctype="multipart/form-data" id="veiculo-form" target="uploader_iframe"
                          action="<?php echo Yii::app()->createUrl("site/uploadFile"); ?>" method="post">

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
                                <input id="btn-upload-file" class=" btn blue pull-right" type="submit" name="yt0"
                                       value="Enviar">
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

