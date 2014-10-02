<?php


//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	GxHtml::valueEx($model),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_cliente), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_cliente), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

<!--<h1>--><?php //echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?><!--</h1>-->

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_cliente',
//'ref_cliente',
//'nome_cliente',
//'imagem_cliente',
//	),
//)); ?>


    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-adjust font-green-haze"></i>
                <span class="caption-subject font-green-haze bold uppercase">Visualizar Dados</span>

            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit font-green-haze"></i> ',
                    array('update', 'id' => $model->id_cliente),
                    array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form class="form-horizontal" role="form">
                <div class="form-body">

                    <?php
                    $viewElements = array(
                        array('id_cliente', 45, 'textField'),
                        array('ref_cliente', 45, 'textField'),
                        array('nome_cliente', 100, 'textArea'),
                      //  array('descricao_praca', 512, 'textArea'),
                     //   array('imagem_praca', 255, 'textArea'),
                      //  array('ativo_praca', 1, 'checkBox'),

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
                        <div class="col-sm-12  ">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    <?php echo GxHtml::encode($model->getAttributeLabel('imagem_cliente')); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::image($model['imagem_cliente'],'Imagem Ref.', array('class'=>'view-thumb')); ?>
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

<h2><?php echo GxHtml::encode($model->getRelationLabel('estudos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->estudos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('estudo/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::link('Abrir',$relatedModel->getLink(),array('target'=>'_blank', 'class'=>'badge badge-danger'));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>