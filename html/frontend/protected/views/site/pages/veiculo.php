<ul class="breadcrumb">
    <li><?php echo CHtml::ajaxLink(
            '<i class="fa fa-home"> </i>Home',
            CController::createUrl('site/main'),
            array('type' => 'POST', 'update' => '#container',
                //    'beforeSend' => 'function(){onClickHome();}'
            ),
            array('id' => GUID::getGUID())); ?>
    </li>


    <li>
        <?php echo CHtml::ajaxLink(
            "Veículo: " . CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')),// . " " . $veiculo->nome_veiculo,
            CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
            array(
                'type' => 'POST',

                'update' => '#container',
                // 'beforeSend' => 'function(){onClickVeiculo("' . $cores[$tag->ref_tag] . '");}'
            ),
            array('id' => GUID::getGUID()));;?>
    </li>


    <?php if (sizeof($veiculo->pracas) > 1) {
        ; ?>

        <li>
           <?php echo $praca->nome_praca ; ?>
        </li>
    <?php }; ?>

</ul>






<div class="tiles">
   <?php
var_dump($praca);    ?>


</div>
