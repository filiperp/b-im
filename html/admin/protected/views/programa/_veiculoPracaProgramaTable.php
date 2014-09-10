<div class="row">
    <div class="col-md-12">

        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Praças do Programa
                </div>
                <div class="tools">
                </div>
            </div>

            <div class="portlet-body">
                <br><br>
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
                    ->leftJoin('veiculo_praca_programa vpp', 'vp.fk_id_praca=vpp.fk_id_praca AND  vp.fk_id_veiculo=vpp.fk_id_veiculo and vpp.fk_id_programa = ' . $ID_PROGRAM);


                $data = $command->queryAll();

                $dataProvider = new CArrayDataProvider($data, array('keyField' => 'k_v_p'));
                $dataProvider->pagination->pageSize = $data->count();

                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'veiculo-praca-grid',
                    'dataProvider' => $dataProvider,
                    'filter' => null,
                    'enableSorting' => false,
                    'summaryText' => '',
                    'showTableOnEmpty' => false,
                    'enablePagination'=>false,
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
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'htmlOptions' => array(
                        'id' => 'GridView',
                        //  'class'=> 'table'
                    )
                ));


                $footerClientScript = Yii::app()->getClientScript();

                $footerClientScript ->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/select2/select2.min.js', CClientScript::POS_END);
                $footerClientScript ->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/media/js/jquery.dataTables.js', CClientScript::POS_END);
                $footerClientScript ->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js', CClientScript::POS_END);
                $footerClientScript ->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.js', CClientScript::POS_END);
                $footerClientScript ->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js', CClientScript::POS_END);
                $footerClientScript ->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js', CClientScript::POS_END);
                $footerClientScript->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/TableAdmin.js', CClientScript::POS_END);

                $footerClientScript->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/Programa.js', CClientScript::POS_END);
                $footerClientScript->registerScript('startVeiculoPracaProgramaTableScript', "  Programa.init(); TableAdvanced.init();", CClientScript::POS_READY);

                ?>

            </div>
        </div>
    </div>
</div>
