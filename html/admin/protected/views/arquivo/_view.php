<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_arquivo) .
                    ' - ' .
                    GxHtml::encode($data->nome_arquivo),

                    array('view', 'id' => $data->id_arquivo),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_arquivo),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">

                <?php
                $viewElements = array(
                    array('id_arquivo', 45, 'textField'),
                    array('ref_arquivo', 45, 'textField'),
                    array('nome_arquivo', 100, 'textArea'),
                    array('caminho_arquivo', 512, 'textArea'),
                    array('ativo_arquivo', 1, 'checkBox'),

                );

                foreach ($viewElements as $key => $value) {
                    ?>

                    <div class="row">
                        <div class="col-sm-4 bold">
                            <?php echo GxHtml::encode($data->getAttributeLabel($value[0])); ?>:
                        </div>
                        <div class="col-sm-8">
                            <?php echo GxHtml::encode($data[$value[0]]); ?>
                        </div>
                    </div>


                <?php
                }
                ?>
                <?php
                $modelV = Veiculo::model()->findByPk($data->fk_id_veiculo);
                $modelP = Praca::model()->findByPk($data->fk_id_praca);
                $modelPR = Programa::model()->findByPk($data->fk_id_programa);
                $labelVeiculo = $modelV->nome_veiculo . ' - ' . $modelP->nome_praca . ' - ' . $modelPR->nome_programa;

                ?>
                <div class="row">
                    <div class="col-sm-4 bold">
                        Veiculo:
                    </div>
                    <div class="col-sm-8">
                        <?php echo $modelV->nome_veiculo; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 bold">
                        Praca:
                    </div>
                    <div class="col-sm-8">
                        <?php echo $modelP->nome_praca; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 bold">
                        Programa
                    </div>
                    <div class="col-sm-8">
                        <?php echo $modelPR->nome_programa; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
