<?php
// erros
if( $_SERVER['HTTP_HOST'] == 'bbi' ) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
} else {
    error_reporting(0);
    ini_set('display_errors', 'off');
}


// redireciona para HTTPS
$protocolo = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ) ? 'https' : 'http' ;

if( $_SERVER['HTTP_HOST'] == 'bbi.net.br' ) {
    header( "HTTP/1.1 301 Moved Permanently" );
    header( "Location: https://admin.bbi.net.br" );
    die;

} elseif( $_SERVER['HTTP_HOST'] != 'bbi' && $protocolo == 'http' ) {
    header( "HTTP/1.1 301 Moved Permanently" );
    header( "Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
    die;
}

// adiciona o framework e arquivo de configuracao
if( $_SERVER['HTTP_HOST'] == 'bbi' ) {
    $yii=dirname(__FILE__).'/../../yii-1.1.14.f0fee9/framework/yii.php';
} else {
    $yii=dirname(__FILE__).'/../yii-1.1.14.f0fee9/framework/yii.php';
}
$config=dirname(__FILE__).'/protected/config/main.php';


// sobrescreve configuracoes em arquivo exclusivo para servidor remoto
if( file_exists(dirname(__FILE__).'/protected/config/main.hosting.php') ) {
	$config=dirname(__FILE__).'/protected/config/main.hosting.php';
}

// (des)ativa debug
if( $_SERVER['HTTP_HOST'] == 'bbi' ) {
    defined('YII_DEBUG') or define('YII_DEBUG',true);
} else {
    defined('YII_DEBUG') or define('YII_DEBUG',false);
}

// define trace level
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

// inclui o framework e executa
require_once($yii);
Yii::createWebApplication($config)->run();
