<?php
/**
 * Created by IntelliJ IDEA.
 * User: frpereira
 * Date: 16/09/14
 * Time: 12:43
 */

$params = array(
    'username' => 'comercialtv',
    'client_ip' => 'http://104.131.11.41/'
);

echo  http_parse_message(http_post_fields("https://tableau.band.com.br/trusted", $params))->body;