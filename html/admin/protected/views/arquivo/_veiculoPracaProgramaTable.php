<div class="veiculo-praca-programa-grid">
    <?php
    /**
     * Created by IntelliJ IDEA.
     * User: filiperp
     * Date: 8/25/14
     * Time: 9:23 PM
     */
    //$ID_PROGRAM = $model->id_programa;

    $command = Yii::app()->db->createCommand()
        ->select('vpp.fk_id_veiculo , vpp.fk_id_praca, vpp.fk_id_programa,
         p.nome_praca, v.nome_veiculo , pr.nome_programa,
         concat(vpp.fk_id_veiculo ,"-" , vpp.fk_id_praca, "-",vpp.fk_id_programa ) as k_v_p_p')
        ->from('veiculo_praca_programa vpp ')
        ->leftJoin('veiculo v', 'vpp.fk_id_veiculo=v.id_veiculo')
        ->leftJoin('praca p', 'vpp.fk_id_praca=p.id_praca')
        ->leftJoin('programa pr', 'vpp.fk_id_programa=pr.id_programa');

if($isCreate){
    $model->fk_id_praca=0;
    $model->fk_id_programa=0;
    $model->fk_id_veiculo=0;
}

    $data = $command->queryAll();

    $dataProvider = new CArrayDataProvider($data, array('keyField' => 'k_v_p_p'));


    $this->widget('zii.widgets.grid.CGridView', array(

        'dataProvider' => $dataProvider,

        'columns' => array(

            array(
                'name' => 'nome_veiculo',
                'header' => 'Veículo',
                'value' => '\'[\' .$data["fk_id_veiculo"] . \'] \' . $data["nome_veiculo"] ',
                'htmlOptions' => array('width' => 105),
            ),
            array(
                'name' => 'nome_praca',
                'header' => 'Praça',
                'value' => ' \'[\' . $data["fk_id_praca"] . \'] \' . $data["nome_praca"] ',
                'htmlOptions' => array('width' => 105),

            ),
            array(
                'name' => 'nome_praca',
                'header' => 'Praça',
                'value' => ' \'[\' . $data["fk_id_programa"] . \'] \' . $data["nome_programa"] ',
                'htmlOptions' => array('width' => 105),

            ),
//        array(
//            'name' => 'selected_programa',
//            'header' => 'selected_programa',
//            'value' => ' $data["selected_programa"]',
//            'htmlOptions' => array('width' => 105),
//        ),
            array(
                'name' => '',
                'header' => 'Habilitar',
                'value' => 'CHtml::radioButton("selected_program",
            $data["fk_id_praca"]=='.$model->fk_id_praca .' && $data["fk_id_programa"]=='.$model->fk_id_programa.' && $data["fk_id_veiculo"]=='.$model->fk_id_veiculo.',
            array(
              "data-veiculo" =>$data["fk_id_veiculo"],
              "data-praca" =>$data["fk_id_praca"],
              "data-programa" =>$data["fk_id_programa"],
              "class"=> "checkVeiculoPracaPrograma"
            ))',
                'type' => 'raw',
                'htmlOptions' => array('width' => 5, 'style' => "text-align:center;"),
                //'visible'=>false,
            ),


        ),
    ));


    $footerClientScript = Yii::app()->getClientScript();
    $footerClientScript->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/Arquivo.js', CClientScript::POS_END);
    $footerClientScript->registerScript('veiculoPRacaPRogramaArquivo', "Arquivo.init();", CClientScript::POS_READY);

    ?>

</div>