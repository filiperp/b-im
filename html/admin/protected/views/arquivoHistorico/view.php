<?php

//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	GxHtml::valueEx($model),
//);
//
//$this->menu=array(
//	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
//	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
//	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_arquivo_historico)),
//	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_arquivo_historico), 'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
//);
?>

<h1>Arquivo
    <small>
        <?php echo $model->fkIdArquivo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdArquivo)), array('arquivo/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdArquivo, true))) : null; ?>
    </small>
</h1>
<!---->
<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_arquivo_historico',
//array(
//			'name' => 'fkIdArquivo',
//			'type' => 'raw',
//			'value' => $model->fkIdArquivo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdArquivo)), array('arquivo/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdArquivo, true))) : null,
//			),
//'ref_arquivo',
//'nome_arquivo',
//'caminho_arquivo',
//	),
//));
?>


<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-adjust font-green-haze"></i>
            <span class="caption-subject font-green-haze bold uppercase">Histórico</span>

        </div>
        <div class="tools">
            <?php echo GxHtml::link('<i class="icon-edit font-green-haze"></i> ',
                array('update', 'id' => $model->id_arquivo_historico),
                array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form class="form-horizontal" role="form">
            <div class="form-body">

                <?php
                $viewElements = array(
                    'id_arquivo_historico',
                    'ref_arquivo',
                    'nome_arquivo',
                    'caminho_arquivo',
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
                                Arquivo:</label>

                            <div class="col-md-9">
                                <p class="form-control-static">
                                    <?php
                                    echo $model->fkIdArquivo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdArquivo)), array('arquivo/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdArquivo, true))) : null;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- row -->
                <div class="row ">
                    <div class="col-md-12 ">
                        <?php
                        echo GxHtml::submitButton(Yii::t('app', 'Excluir'), array('id' => 'btnSubmmitForm', 'class' => ' btn red pull-right'));
                       // $this->endWidget();
                        ?>
                    </div>
                </div>


            </div>

        </form>
        <!-- END FORM-->
    </div>
</div>


