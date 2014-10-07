<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_veiculo) .
                    ' - ' .
                    GxHtml::encode($data->nome_veiculo),

                    array('view', 'id' => $data->id_veiculo),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_veiculo),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content ">
                <div class="row">

                    <div class="col-sm-8">
                        <?php
                        $viewElements = array(
                            array('id_veiculo', 45, 'textField'),
                            array('ref_veiculo', 45, 'textField'),
                            array('nome_veiculo', 100, 'textArea'),
                            array('descricao_veiculo', 512, 'textArea'),
                            //  array('imagem_veiculo', 255, 'textArea'),
                            array('ativo_veiculo', 1, 'checkBox'),

                        );

                        foreach ($viewElements as $key => $value) {
                            ?>

                            <div class="row">
                                <div class="col-sm-4 bold">
                                    <?php echo GxHtml::encode($data->getAttributeLabel($value[0])); ?>:
                                </div>
                                <div class="col-sm-4">
                                    <?php echo GxHtml::encode($data[$value[0]]); ?>
                                </div>
                            </div>


                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-sm-4  ">
                        <?php echo GxHtml::image($data['imagem_veiculo'], 'Imagem Ref.', array('class' => 'view-thumb thumbnail')); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

