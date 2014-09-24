<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_praca) .
                    ' - ' .
                    GxHtml::encode($data->nome_praca),

                    array('view', 'id' => $data->id_praca),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_praca),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">
                <div class="row">

                    <div class="col-sm-8">
                        <?php
                        $viewElements = array(
                            array('id_praca', 45, 'textField'),
                            array('ref_praca', 45, 'textField'),
                            array('nome_praca', 100, 'textArea'),
                            array('descricao_praca', 512, 'textArea'),
                            array('ativo_praca', 1, 'checkBox'),

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
                    </div>
                    <div class="col-sm-4  ">
                        <?php echo GxHtml::image($data['imagem_praca'], 'Imagem Ref.', array('class' => 'view-thumb thumbnail')); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

