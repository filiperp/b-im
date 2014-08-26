<div class="veiculo-praca-programa-grid">
    <?php
    /**
     * Created by IntelliJ IDEA.
     * User: filiperp
     * Date: 8/25/14
     * Time: 9:23 PM
     */
    $ID_PROGRAM = $model->id_programa;

    $command = Yii::app()->db->createCommand()
        ->select('vp.fk_id_veiculo , vp.fk_id_praca, p.nome_praca, v.nome_veiculo , concat(vp.fk_id_veiculo ,"-" , vp.fk_id_praca) as k_v_p, coalesce (vpp.fk_id_programa, 0 ) as selected_programa')
        ->from('veiculo_praca vp')
        ->join('veiculo v', 'vp.fk_id_veiculo=v.id_veiculo')
        ->join('praca p', 'vp.fk_id_praca=p.id_praca')
        ->leftJoin('veiculo_praca_programa vpp', 'vp.fk_id_praca=vpp.fk_id_praca AND  vp.fk_id_veiculo=vpp.fk_id_veiculo and vpp.fk_id_programa = '.$ID_PROGRAM );


    $data = $command->queryAll();

    $dataProvider = new CArrayDataProvider($data, array('keyField' => 'k_v_p'));


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
//        array(
//            'name' => 'selected_programa',
//            'header' => 'selected_programa',
//            'value' => ' $data["selected_programa"]',
//            'htmlOptions' => array('width' => 105),
//        ),
            array(
                'name' => '',
                'header' => 'Habilitar',
                'value' => 'CHtml::checkBox("selected_".$data["fk_id_veiculo"]."_".$data["fk_id_praca"],
            $data["selected_programa"]!=0,
            array(
              "data-veiculo" =>$data["fk_id_veiculo"],
              "data-praca" =>$data["fk_id_praca"],
              "data-programa" =>' . $ID_PROGRAM . ',
              "class"=> "checkVeiculoPraca"
            ))',
                'type' => 'raw',
                'htmlOptions' => array('width' => 5, 'style' => "text-align:center;"),
                //'visible'=>false,
            ),


        ),
    ));


    $footerClientScript = Yii::app()->getClientScript();
    $footerClientScript->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/Programa.js', CClientScript::POS_END);
    $footerClientScript->registerScript('metronicMenuStart', "Programa.init();", CClientScript::POS_READY);

    ?>

</div>