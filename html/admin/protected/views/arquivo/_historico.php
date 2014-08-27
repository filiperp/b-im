<div class="veiculo-praca-programa-grid">
    <?php

    if($isCreate){
        $model->id_arquivo=0;

    }




    $command = Yii::app()->db->createCommand()
        ->select('  id_arquivo_historico,
                    fk_id_arquivo,
                    ref_arquivo,
                    nome_arquivo,
                   caminho_arquivo')
        ->from('arquivo_historico ah ')
        ->where("fk_id_arquivo=$model->id_arquivo");



    $data = $command->queryAll();

    $dataProvider = new CArrayDataProvider($data, array('keyField' => 'id_arquivo_historico'));


    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'historico-grid',
        'dataProvider' => $dataProvider,
        'filter' => null,
        'enableSorting' => false,
        'summaryText' => '',
        'showTableOnEmpty' => false,
        'enablePagination' => false,
        'columns' => array(

            array(
                'name' => 'id_arquivo_historico',
                'header' => 'id',
                'value' => '\'[\' .$data["id_arquivo_historico"] . \']',
              //  'htmlOptions' => array('width' => 105),
            ),
            array(
                'name' => 'ref_arquivo',
                'header' => 'Ref',
                'value' => ' $data["ref_arquivo"] ',
                //'htmlOptions' => array('width' => 105),

            ),
            array(
                'name' => 'nome_arquivo',
                'header' => 'Nome',
                'value' => ' $data["nome_arquivo"] ',
               // 'htmlOptions' => array('width' => 105),

            ),
            array(
                'name' => 'caminho_arquivo',
                'header' => 'Caminho',
                'value' => ' $data["caminho_arquivo"] ',
                // 'htmlOptions' => array('width' => 105),

            ),




        ),
        'itemsCssClass' => 'table table-striped table-bordered table-hover',
        'htmlOptions' => array(
            'id' => 'GridViewHistorico',
            //  'class'=> 'table'
        )
    ));




    ?>

</div>

<?php $this->renderPartial('../layouts/_tableAdvanced', array()); ?>