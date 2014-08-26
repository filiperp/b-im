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

                <div class="row">
                    <div class="col-sm-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('id_programa')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::link(GxHtml::encode($data->id_programa), array('view', 'id' => $data->id_programa)); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 bold">

                        <?php echo GxHtml::encode($data->getAttributeLabel('ref_programa')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::encode($data->ref_programa); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('nome_programa')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::encode($data->nome_programa); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('descricao_programa')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::encode($data->descricao_programa); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('imagem_programa')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::encode($data->imagem_programa); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('ativo_programa')); ?>:
                    </div>
                    <div class="col-sm-8">
                        <?php echo GxHtml::encode($data->ativo_programa); ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

