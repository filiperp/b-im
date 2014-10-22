<ul class="breadcrumb">
    <li><i class="fa fa-video-camera"> </i> <?php echo $tag->nome_tag ; ?></li>


</ul>


<h1>Escolha o Veículo desejado:</h1>
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
    foreach ($tag->veiculos as $veiculo) {
        if ($veiculo->ativo_veiculo == 1) {
            echo CHtml::ajaxLink(
                '<div class="tile-body ">' .
                    CHtml::image(Yii::app()->request->baseUrl . '/' . $veiculo['imagem_veiculo'], "", array("class" => 'imgicon100')) .
                '</div>
                <div class="tile-object">
                    <div class="name " style="color:#333; font-weight:600;">' .
                        $veiculo['nome_veiculo'] .
                    '</div>
                     <div class="number">' .
                        //$veiculo['id_veiculo'] . '
                     '</div>
                </div> ',
                CController::createUrl('site/veiculo&id=' . $veiculo['id_veiculo']),
                array(
                    'type' => 'POST',
                    'update' => '#container',
                    'beforeSend' => 'function(){wait();}'
                ),
                array('id' => GUID::getGUID(),
                    'class' => 'tile-border tile ',
                   ));
        }
    }
    ?>
</div>