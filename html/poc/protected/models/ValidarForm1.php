<?php
/**
 * Created by IntelliJ IDEA.
 * User: filiperp
 * Date: 8/15/14
 * Time: 2:49 PM
 */

class ValidarForm1 extends CFormModel {
    public  $nome;
    public $captcha;

    public function rules(){
        return array(
            array('nome',  'required', 'message'=> 'campo obrigatório'),
            array('nome', 'match', 'pattern'=> '/^[ a-zA-Z\s]+$/', 'message'=> 'apenas letras e espaço'),
            array( 'nome', 'length', 'min'=>5, 'tooShort'=>'minimo 5 carac','max'=> 10, 'tooLong'=> 'Max 10 carac.'),
            array('captcha','captcha', 'message'=> 'errorrr de captcha')
        );
    }

}