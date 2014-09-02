<?php

//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	GxHtml::valueEx($model),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_noticia), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_noticia), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_noticia',
//'ref_noticia',
//'nome_noticia',
//'descricao_noticia',
//'link_noticia',
//'ativo_noticia:boolean',
//'imagem_noticia',
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
                array('update', 'id' => $model->id_noticia),
                array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form class="form-horizontal" role="form">
            <div class="form-body">

                <?php
                $viewElements = array(
                    array('id_noticia', 45, 'textField'),
                    array('ref_noticia', 45, 'textField'),
                    array('nome_noticia', 100, 'textArea'),
                    array('descricao_noticia', 512, 'textArea'),
                    array('link_noticia', 512, 'textArea'),
                    array('ativo_noticia', 1, 'checkBox'),
                    array('imagem_noticia', 255, 'textArea'),
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
                                <?php echo GxHtml::encode($model->getAttributeLabel('imagem_noticia')); ?>:</label>

                            <div class="col-md-9">
                                <p class="form-control-static">
                                    <?php echo GxHtml::image($model['imagem_noticia'],'Imagem Ref.', array('class'=>'view-thumb')); ?>
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
