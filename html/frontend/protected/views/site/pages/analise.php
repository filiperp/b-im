<?php
/**
 * Created by IntelliJ IDEA.
 * User: frpereira
 * Date: 16/09/14
 * Time: 00:54
 */

?>
<div class="row " style="min-height: 80px; margin-bottom:10px;">
    <div class="col-sm-12 well ">
        <?php
        echo CHtml::ajaxLink(
            '

                <i class="fa fa-reply"></i> Voltar aos painéis

            ',



            CController::createUrl('site/veiculo&id=' . $veiculo . '&idPraca=' . $praca),
            array(
                'type' => 'POST',

                'update' => '#container',
                'beforeSend' => 'function(){wait();}'
            ),
            array('id' => GUID::getGUID(), 'class' => 'btn btn-primary pull-left',
            'style'=>'position:absolute;'));



        ;?>
        <div class="text-center">
                <h2  style="vertical-align: middle;display: inline;"><span class="small">Análise:</span> <?php echo $nome ; ?></h2>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-sm-12 ">
        <iframe src="<?php echo $link;?>"
                width="100%" height="756px"  align="center">
        </iframe>
    </div>

</div>
