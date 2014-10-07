

<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_cliente) .
                    ' - ' .
                    GxHtml::encode($data->nome_cliente),

                    array('view', 'id' => $data->id_cliente),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_cliente),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">

                <?php
                $viewElements = array(
                    array('id_cliente', 45, 'textField'),
                    array('ref_cliente', 45, 'textField'),
                    array('nome_cliente', 100, 'textArea'),
                  //  array('descricao_noticia', 512, 'textArea'),
                  //  array('link_noticia', 512, 'textArea'),
                 //   array('ativo_noticia', 1, 'checkBox'),
                    // array('imagem_noticia', 255, 'textArea'),



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
                        <?php echo GxHtml::encode($data->getAttributeLabel('imagem_cliente')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::image($data['imagem_cliente'],'Imagem Ref.', array('class'=>'view-thumb')); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
