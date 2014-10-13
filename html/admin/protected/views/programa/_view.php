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
                    array('id_programa', 45, 'textField'),
                    array('ref_programa', 45, 'textField'),
                    array('nome_programa', 100, 'textArea'),
                    array('descricao_programa', 512, 'textArea'),
                    array('imagem_programa', 255, 'textArea'),
                    array('ativo_programa', 1, 'checkBox'),

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
                        Veículos:
                    </div>
                    <div class="col-lg-8  tiles">

                        <?php
                        foreach ($data->veiculoPracaProgramas as $oi) {

                            ?>


                            <div class="btn  grey-steel" style="margin-bottom: 4px">
                                <div class="tile-body center-block" style="min-height: 40px">
                                 <?php echo GxHtml::image(Veiculo::model()->findByPk($oi->fk_id_veiculo)->imagem_veiculo, '', array('class'=>'mini-thumb-image-grid inline-block')) ; ?>
                                </div>
                                <div class="tile-object">
                                    <div class="name">
                                         <?php echo   GxHtml::link(Veiculo::model()->findByPk($oi->fk_id_veiculo)->nome_veiculo,
                                                 array('veiculo/view', 'id' => $oi->fk_id_veiculo))   ; ?><br>
                                        <?php echo   GxHtml::link(Praca::model()->findByPk($oi->fk_id_praca)->nome_praca,
                                            array('praca/view', 'id' => $oi->fk_id_praca))   ; ?>
                                    </div>

                                </div>
                            </div>

                        <?php }; ?>



                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('imagem_programa')); ?>:
                    </div>
                    <div class="col-lg-8 thumbnail">
                        <?php echo GxHtml::image($data['imagem_programa'], 'Imagem Ref.', array('class' => 'view-thumb')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

