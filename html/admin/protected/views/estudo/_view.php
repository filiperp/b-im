


<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_estudo) .
                    ' - ' .
                    GxHtml::encode($data->nome_estudo),

                    array('view', 'id' => $data->id_estudo),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ',
                    array('update', 'id' => $data->id_estudo),
                    array('class' => ' fa fa-gear', 'data-toggle' => "modal")); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">
                <div class="row">

                    <div class="col-sm-8">
                        <?php
                        $viewElements = array(

                            array('id_estudo', 45, 'textField'),
                            array('ref_estudo', 45, 'textField'),
                            array('nome_estudo', 100, 'textArea'),
                             array('caminho_estudo', 255, 'textField'),
                            array('ativo_estudo', 1, 'checkBox'),


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
                                <?php echo GxHtml::encode($data->getAttributeLabel('caminho_estudo')); ?>:
                            </div>
                            <div class="col-sm-8">
                                <?php echo CHtml::link('Abrir',$data->getLink(), array("target"=>"_blank")); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4  ">
                        <?php echo GxHtml::image($data['caminho_estudo'], 'Imagem Ref.', array('class' => 'view-thumb thumbnail')); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

