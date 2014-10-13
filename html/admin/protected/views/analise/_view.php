<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_analise) .
                    ' - ' .
                    GxHtml::encode($data->nome_analise),

                    array('view', 'id' => $data->id_analise),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_analise),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">

                <?php
                $viewElements = array(
                    array('id_analise', 45, 'textField'),
                    array('ref_analise', 45, 'textField'),
                    array('nome_analise', 100, 'textArea'),
                    array('descricao_analise', 512, 'textArea'),
                 //   array('imagem_analise', 255, 'textArea'),
                    array('ativo_analise', 1, 'checkBox'),
                    array('help_analise', 1, 'checkBox'),
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

                <div class="row">
                    <div class="col-lg-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('imagem_analise')); ?>:
                    </div>
                    <div class="col-lg-8">
                        <?php echo GxHtml::image($data['imagem_analise'],'Imagem Ref.', array('class'=>'view-thumb')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

