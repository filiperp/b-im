<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_programa) .
                    ' - ' .
                    GxHtml::encode($data->nome_programa),

                    array('view', 'id' => $data->id_programa),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_programa),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">

                <?php
                $viewElements = array(
                    array('id_programa',45, 'textField'),
                    array('ref_programa',45,'textField'),
                    array('nome_programa',100,'textArea'),
                    array('descricao_programa',512,'textArea'),
                    array('imagem_programa',255,'textArea'),
                    array('ativo_programa',1,'checkBox'),

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
                <div class="row">
                    <div class="col-sm-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('imagem_programa')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::image($data['imagem_programa'],'Imagem Ref.', array('class'=>'view-thumb')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

