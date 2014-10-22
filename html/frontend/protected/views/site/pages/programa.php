<div class=" " id="frame_result" style="display: none; position: fixed; top:74px; z-index: 1000;width: 400px;right: 0px;">

    <div class="btn btn-info" style="right: 7px; position: absolute; top:8px; " id="btn_close_frame_result"><i class="fa fa-close"></i></div>
    <iframe id="uploader_iframe" scrolling="no" name="uploader_iframe" style="display: block; overflow: hidden; width: 100%; height: 45px; border: none !important;overflow-style: panner;"></iframe>


</div>

<ul class="breadcrumb">
    <li><?php echo CHtml::ajaxLink(
            '<i class="fa fa-video-camera"> </i> '. $tag['nome_tag'],
            CController::createUrl('site/main'),
            array('type' => 'POST', 'update' => '#container',
                'beforeSend' => 'function(){onClickHome();}'
            ),
            array('id' => GUID::getGUID())); ?>
    </li>


    <li>
        <?php echo CHtml::ajaxLink(
            $veiculo->nome_veiculo, //CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')), // . " " . $veiculo->nome_veiculo,
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
