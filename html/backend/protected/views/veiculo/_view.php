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
                <?php echo GxHtml::link('<i class="icon-edit"></i> ' , array('update', 'id' => $data->id_veiculo),array('class' => ' fa fa-gear', 'data-toggle'=>"modal" )); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">
                <div class="row">
                    <div class="col-sm-2 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('ref_veiculo')); ?>
                    </div>
                    <div class="col-sm-10">
                        <?php echo GxHtml::encode($data->ref_veiculo); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('descricao_veiculo')); ?>
                    </div>
                    <div class="col-sm-10">
                        <?php echo GxHtml::encode($data->descricao_veiculo); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('imagem_veiculo')); ?>
                    </div>
                    <div class="col-sm-10">
                        <?php echo GxHtml::encode($data->imagem_veiculo); ?>
                    </div>
                </div>

            </div>

        </div>



    </div>


</div>

