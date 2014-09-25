<ul class="breadcrumb">
    <li><?php echo CHtml::ajaxLink(
            '<i class="fa fa-home"> </i>Home',
            CController::createUrl('site/main'),
            array('type' => 'POST', 'update' => '#container',
                'beforeSend' => 'function(){onClickHome();}'
            ),
            array('id' => GUID::getGUID())); ?></li>
    <li>
        <?php echo CHtml::ajaxLink(
            "Veículo: " . $veiculo->nome_veiculo, // CHtml::image(Yii::app()->baseUrl . '/' . $veiculo->imagem_veiculo, '', array('class' => 'imgicon')) ,//. " " . $veiculo->nome_veiculo,
            CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo),
            array(
                'type' => 'POST',

                'update' => '#container',
                'beforeSend' => 'function(){wait();}'
            ),
            array('id' => GUID::getGUID()));;?>
    </li>

</ul>




<div class="row">
    <div class="col-md-3 col-sm-3">
        <img src="<?php echo Yii::app()->request->baseUrl . '/' . $veiculo['imagem_veiculo']; ?>" style="width: 100%; height: auto;">
    </div>
    <div class="col-md-9 col-sm-9">
        <h1> Escolha a praça desejada:</h1>
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
                    '<div class="tile-body ">
                        <img style="width:111px; height:auto;border:2px solid #ddd; background-color:#fff;" src="'.$praca->imagem_praca.'">
                    </div>
                    <div class="tile-object">
                    <div class="name"  style="color:#333; font-weight:600;">
                  ' . $praca->nome_praca . '
                        </div>
                        <div class="number">
                ' . //$praca->id_praca . '
                      '  </div>
                    </div> '
                    ,


                    CController::createUrl('site/veiculo&id=' . $veiculo->id_veiculo . '&idPraca=' . $praca->id_praca),
                    array(
                        'type' => 'POST',

                        'update' => '#container',
                        'beforeSend' => 'function(){wait();}'
                    ),
                    array('id' => GUID::getGUID(), 'class' => 'tile-border tile'));


            }
            ?>


        </div>
    </div>
</div>