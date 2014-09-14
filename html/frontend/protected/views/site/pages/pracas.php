<ul class="breadcrumb">
    <li><?php echo CHtml::ajaxLink(
            '<i class="fa fa-home"> </i>Home',
            CController::createUrl('site/main'),
            array('type' => 'POST', 'update' => '#container',
                //    'beforeSend' => 'function(){onClickHome();}'
            ),
            array('id' => GUID::getGUID())); ?></li>
    <li>
        <?php echo CHtml::ajaxLink(
            "Veículo: " . CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')) ,//. " " . $veiculo->nome_veiculo,
            CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
            array(
                'type' => 'POST',

                'update' => '#container',
                // 'beforeSend' => 'function(){onClickVeiculo("' . $cores[$tag->ref_tag] . '");}'
            ),
            array('id' => GUID::getGUID()));;?>
    </li>

</ul>


<h1> <?php echo CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')); ?>Escolha a praça desejada:</h1>
<div class="tiles">
    <?php
    /**
     * Created by IntelliJ IDEA.
     * User: frpereira
     * Date: 13/09/14
     * Time: 23:48
     *
     *
     */


    foreach ($veiculo->pracas as $praca) {

        echo CHtml::ajaxLink(
            '<div class="tile-body">
                <i class="fa fa-map-marker"></i>
            </div>
            <div class="tile-object">
            <div class="name">
          ' . $praca->nome_praca . '
                        </div>
                        <div class="number">
                ' . $praca->id_praca . '
                        </div>
                    </div> '
            ,


            CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo . '&idPraca=' . $praca->id_praca),
            array(
                'type' => 'POST',

                'update' => '#container',
                // 'beforeSend' => 'function(){onClickVeiculo("' . $cores[$tag->ref_tag] . '");}'
            ),
            array('id' => GUID::getGUID(), 'class' => 'tile btn-primary'));


    }
    ?>


</div>