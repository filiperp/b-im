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
	$.fn.yiiGridView.update('programa-grid', {
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
));
?>
<!--</div><!-- search-form - - > -->
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
                    'id' => 'programa-grid',
                    'dataProvider' => $model->search(),
                    'filter' => null,
                    'enableSorting' => false,
                    'summaryText' => '',
                    'showTableOnEmpty' => false,
                    'enablePagination' => false,
                    'columns' => array(
                        array(
                            'name' => 'id_programa',
                            'header' => 'id',
                            'value' => '$data["id_programa"]',
                        ),
                        'ref_programa',
                        'nome_programa',
                        'descricao_programa',
                        'imagem_programa',
                        array(
                            'name' => 'ativo',
                            'value' => '($data->ativo_programa === "0") ? Yii::t(\'app\', \'\') : Yii::t(\'app\', \'X\')',

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








