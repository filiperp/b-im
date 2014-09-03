<?php
//
//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	GxHtml::valueEx($model),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_tag), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_tag), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

    <!--<h1>--><?php //echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?><!--</h1>-->

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_tag',
//'ref_tag',
//'nome_tag',
//'tipo_tag',
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
                    array('update', 'id' => $model->id_tag),
                    array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form class="form-horizontal" role="form">
                <div class="form-body">


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
                            <div class="col-sm-12">
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


    <h2><?php echo 'Lista de Objetos <strong>"' . strtoupper($model->tipo_tag) . "'</strong> ligados à esse tag."; ?></h2>
<?php
$dataModels = array(
    'programa'=> array($model->programas),
    'analise'=> array($model->analises),
    'arquivo'=> array($model->arquivos),
    'veiculo'=> array($model->veiculos),

);


echo GxHtml::openTag('ul');
foreach ($dataModels[$model->tipo_tag][0] as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array("$model->tipo_tag/view", 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>
