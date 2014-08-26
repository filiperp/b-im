<?php

require 'metas/metas.php';


$ttt = "<h1>asfasdfadfadf</h1>";
$fromController = $fromC;
echo $ttt;
echo "<br> veio do controller: <h2>$fromController</h2>";

$this->breadcrumbs=array(
    'test'
);
Yii::app()->clientScript->registerScriptFile( Yii::app()->request->baseUrl.'/assets/d44b3769/',0 );//0 é head ; 1 é inicio body e 2 é fianl body);
Yii::app()->clientScript->registerCssFile(
    Yii::app()->request->baseUrl.'/css/',
    null //media
);

?>

<a href="index.php?r=site/page&view=artigo1">vai</a>