<div class="view">
    <div class="portlet box grey-salt">
        <div class="portlet-title">
            <div class="caption">
                <?php echo GxHtml::link(
                    '<i class="icon-screen-desktop"></i> ' .
                    GxHtml::encode($data->id_tag) .
                    ' - ' .
                    GxHtml::encode($data->nome_tag),

                    array('view', 'id' => $data->id_tag),

                    array('class' => ' ')); ?>
            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit"></i> ' ,
                    array('update', 'id' => $data->id_tag),
                    array('class' => ' fa fa-gear', 'data-toggle'=>"modal" )); ?>
            </div>

        </div>
        <div class="portlet-body">
            <div class="portlet-content">

                <div class="row">
                    <div class="col-sm-2 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('ref_tag')); ?>
                    </div>
                    <div class="col-sm-10">
                        <?php echo GxHtml::encode($data->ref_tag); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('nome_tag')); ?>
                    </div>
                    <div class="col-sm-10">
                        <?php echo GxHtml::encode($data->nome_tag); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2 bold">
                        <?php echo GxHtml::encode($data->getAttributeLabel('tipo_tag')); ?>
                    </div>
                    <div class="col-sm-10">
                        <?php echo GxHtml::encode($data->tipo_tag); ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>




