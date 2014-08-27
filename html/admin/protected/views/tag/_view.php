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

                <?php
                $viewElements = array(

                    'id_tag',
                    'ref_tag',
                    'nome_tag',
                    'tipo_tag',


                );

                foreach ($viewElements as $key => $value) {
                    ?>
                    <div class="row">
                        <div class="col-sm-4 bold ">

                            <?php echo GxHtml::encode($data->getAttributeLabel($value)); ?>:
                        </div>
                        <div class="col-sm-8">
                            <?php echo GxHtml::encode($data[$value]); ?>
                        </div>
                    </div>


                <?php

                }
                ?>




            </div>
        </div>
    </div>
</div>




