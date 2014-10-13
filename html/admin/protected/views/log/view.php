<?php
//
//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	GxHtml::valueEx($model),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_log), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_log), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

<!--<h1>--><?php //echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?><!--</h1>-->
<!---->
<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_log',
//'usuario_log',
//'ip_log',
//'acao_log',
//'ref_log',
//'data_log',
//'descricao_log',
//	),
//));
?>


<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-adjust font-green-haze"></i>
            <span class="caption-subject font-green-haze bold uppercase">Visualizar Dados</span>

        </div>
        <div class="tools">
            <?php echo GxHtml::link('<i class="icon-edit font-green-haze"></i> ',
                array('update', 'id' => $model->id_log),
                array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form class="form-horizontal" role="form">
            <div class="form-body">

                <?php
                $viewElements = array(
                    'id_log',
                    'usuario_log',
                    'ip_log',
                    'acao_log',
                    'ref_log',
                    'data_log',
                    'descricao_log',
                );

                foreach ($viewElements as $key => $value) {
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    <?php echo GxHtml::encode($model->getAttributeLabel($value)); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::encode($model[$value]); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                <?php

                }
                ?>


            </div>

        </form>
        <!-- END FORM-->
    </div>
</div>

