<?php

//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	GxHtml::valueEx($model),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_programa), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_programa), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

    <!--<h1>--><?php //echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?><!--</h1>-->
    <!---->
<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_programa',
//'ref_programa',
//'nome_programa',
//'descricao_programa',
//'imagem_programa',
//'ativo_programa:boolean',
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
                    array('update', 'id' => $model->id_programa),
                    array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form class="form-horizontal" role="form">
                <div class="form-body">

                    <?php
                    $viewElements = array(
                        'id_programa',
                        'ref_programa',
                        'nome_programa',
                        'descricao_programa',
                        'imagem_programa',
                        'ativo_programa'
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







                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    TAGS:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php
                                        foreach ($model->tags as $relatedModel) {
                                            echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tag/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)), array('class' => "btn btn-circle btn-success"));
                                            echo ' ';
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    Praças:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">

                                        <?php

                                        $lista = VeiculoPracaPrograma::model()->findAllByAttributes(array('fk_id_programa'=>$model->id_programa));

                                        foreach ($lista as $relatedModel) {
                                           // var_dump($relatedModel);
                                            $modelV = Veiculo::model()->findByPk($relatedModel->fk_id_veiculo);
                                            $modelP = Praca::model()->findByPk($relatedModel->fk_id_praca);
                                           $modelPR = Programa::model()->findByPk($relatedModel->fk_id_programa);
                                            //echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('praca/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)), array('class' => "btn btn-circle btn-danger"));
                                            echo "$modelV->nome_veiculo - $modelP->nome_praca <br>";
                                        }
                                        ?>
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




    <!--<h2>--><?php //echo GxHtml::encode($model->getRelationLabel('tags')); ?><!--</h2>-->
<?php
//	echo GxHtml::openTag('ul');
//	foreach($model->tags as $relatedModel) {
//		echo GxHtml::openTag('li');
//		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tag/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
//		echo GxHtml::closeTag('li');
//	}
//	echo GxHtml::closeTag('ul');
//
?>

    <!--<h2>--><?php //echo GxHtml::encode($model->getRelationLabel('veiculoPracaProgramas')); ?><!--</h2>-->
<?php
//	echo GxHtml::openTag('ul');
//	foreach($model->veiculoPracaProgramas as $relatedModel) {
//		echo GxHtml::openTag('li');
//		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('veiculoPracaPrograma/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
//		echo GxHtml::closeTag('li');
//	}
//	echo GxHtml::closeTag('ul');

$this->renderPartial('_veiculoPracaProgramaTable', array(
    'model' => $model));
?>