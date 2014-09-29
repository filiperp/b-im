<?php
//
//$this->breadcrumbs = array(
//    $model->label(2) => array('index'),
//    GxHtml::valueEx($model),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_arquivo), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_arquivo), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

<!--    <h1>--><?php //echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?><!--</h1>-->
    <!---->
<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_arquivo',
//'ref_arquivo',
//'nome_arquivo',
//'caminho_arquivo',
//'ativo_arquivo:boolean',
//array(
//			'name' => 'fkIdVeiculo',
//			'type' => 'raw',
//			'value' => $model->fkIdVeiculo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdVeiculo)), array('veiculoPracaPrograma/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdVeiculo, true))) : null,
//			),
//array(
//			'name' => 'fkIdPraca',
//			'type' => 'raw',
//			'value' => $model->fkIdPraca !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdPraca)), array('veiculoPracaPrograma/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdPraca, true))) : null,
//			),
//array(
//			'name' => 'fkIdPrograma',
//			'type' => 'raw',
//			'value' => $model->fkIdPrograma !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdPrograma)), array('veiculoPracaPrograma/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdPrograma, true))) : null,
//			),
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
                    array('update', 'id' => $model->id_arquivo),
                    array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form class="form-horizontal" role="form">
                <div class="form-body">

                    <?php
                    $viewElements = array(
                        array('id_arquivo'   ,45, 'textField'),
                        array('ref_arquivo'   ,45, 'textField'),

                        array('nome_arquivo'   , 100, 'textArea'),
                        array('caminho_arquivo'   , 512, 'textArea'),
                        array('ativo_arquivo'   , 1, 'checkBox'),
                        array('usuario'   ,45, 'textField'),
                        array('data'   ,45, 'textField'),
                    );

                    foreach ($viewElements as $key => $value) {
                        ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label col-md-3 bold">
                                        <?php echo GxHtml::encode($model->getAttributeLabel($value[0])); ?>:</label>

                                    <div class="col-md-9">
                                        <p class="form-control-static">
                                            <?php echo GxHtml::encode($model[$value[0]]); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php

                    }
                    ?>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                   Arquivo</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo CHtml::link('Abrir',$model->getLink(), array("target"=>"_blank")); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    Veiculo:</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo Veiculo::model()->findByPk($model->fk_id_veiculo)->nome_veiculo; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    Praca:</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo Praca::model()->findByPk($model->fk_id_praca)->nome_praca; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    Programa:</label>
                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo Programa::model()->findByPk($model->fk_id_programa)->nome_programa; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
            <!-- END FORM-->
        </div>
    </div>


    <h2><?php echo GxHtml::encode($model->getRelationLabel('arquivoHistoricos')); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->arquivoHistoricos as $relatedModel) {
    echo GxHtml::openTag('li');
   //echo CHtml::link('Abrir',$model->getLink(), array("target"=>"_blank"));
  echo $relatedModel['usuario']. ' - '. $relatedModel['data']. ' - ';
    echo GxHtml::link(   'VER', array('arquivoHistorico/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)),array('class'=> 'btn btn-warning'));
    echo GxHtml::link('Abrir',$relatedModel->getLink($model-> getBaseTag()), array("target"=>"_blank",'class'=> 'btn btn-primary'));

    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('tags')); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->tags as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tag/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');


?>