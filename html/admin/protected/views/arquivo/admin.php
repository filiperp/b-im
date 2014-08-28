<?php

//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	Yii::t('app', 'Manage'),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite blue')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue  forceWhite  green ')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('arquivo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
    You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php //echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<!--<div class="search-form">-->
<?php $this->renderPartial('_search', array(
    'model' => $model,
)); ?>
<!--</div><!-- search-form - ->-->
<div class="row">
    <div class="col-md-12">

        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Dados
                </div>
                <div class="tools">
                </div>
            </div>

            <div class="portlet-body">
                <br><br>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'arquivo-grid',
                    'dataProvider' => $model->search(),
                    'filter' => null,
                    'enableSorting' => false,
                    'summaryText' => '',
                    'showTableOnEmpty' => false,
                    'enablePagination' => false,
                    'columns' => array(
                        'id_arquivo',
                        'ref_arquivo',
                        'nome_arquivo',
                        'caminho_arquivo',
                        array(
                            'name' => 'ativo_arquivo',
                            'value' => '($data->ativo_arquivo === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
                            'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
                        ),
                        array(
                            'header'=>'Veiculo',
                            'name' => 'fk_id_veiculo',
                            'value' => 'Veiculo::model()->findByPk($data->fk_id_veiculo)["nome_veiculo"]',
                            //'filter' => GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true)),
                        ),

                        array(
                            'header'=>'Praca',
                            'name' => 'fk_id_praca',
                            'value' => 'Praca::model()->findByPk($data->fk_id_praca)["nome_praca"]',

                        ),
                        array(
                            'header'=>'Programa',
                            'name' => 'fk_id_programa',
                            'value' => 'Programa::model()->findByPk($data->fk_id_programa)["nome_programa"]',

                        ),
                        array(
                            'class' => 'CButtonColumn',
                        ),
                    ),
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'htmlOptions' => array(
                        'id' => 'GridView',
                        //  'class'=> 'table'
                    )
                )); ?>


            </div>
        </div>
    </div>
</div>

<?php $this->renderPartial('../layouts/_tableAdvanced', array()); ?>


