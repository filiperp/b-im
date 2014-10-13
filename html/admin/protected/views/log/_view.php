<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_log) .
                    ' - ' .
                    GxHtml::encode($data->usuario_log) .
                    ' - ' .
                    GxHtml::encode($data->acao_log)
                    ,

                    array('view', 'id' => $data->id_log),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_log),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">

                <?php
                $viewElements = array(
                    array('id_log',45, 'textField'),
                    array('usuario_log', 50, 'textField'),
                    array('ip_log', 45, 'textField'),
                    array('acao_log', 45, 'textField'),
                    array('ref_log', 45, 'textField'),
                    array('data_log', 45, 'textField'),
                    array('descricao_log', 512, 'textArea'),

                );

                foreach ($viewElements as $key => $value) {
                    ?>

                    <div class="row">
                        <div class="col-lg-4 bold">
                            <?php echo GxHtml::encode($data->getAttributeLabel($value[0])); ?>:
                        </div>
                        <div class="col-lg-8">
                            <?php echo GxHtml::encode($data[$value[0]]); ?>
                        </div>
                    </div>


                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

