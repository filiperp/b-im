<?php
/**
 * Created by IntelliJ IDEA.
 * User: frpereira
 * Date: 26/09/14
 * Time: 14:03
 */

class GUID  extends CApplicationComponent{
    static function getGUID(){

        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = //chr(123)// "{"
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        // .chr(125);// "}"
        return $uuid;

    }

}