/**
 * Created by filiperp on 8/25/14.
 */
var Arquivo;
Arquivo = (function () {
    'use strict';
    function Arquivo() {


    }

    Arquivo.onClickVeiculoPracaPrograma = function(e)
    {
        $('.checkVeiculoPracaPrograma').attr('checked', "");
        $(this).attr('checked', "checked");
//        console.log($(this).data('veiculo'));
//        console.log($(this).data('praca'));
//        console.log($(this).data('programa'));

        $('#Arquivo_fk_id_veiculo').val($(this).data('veiculo'));
        $('#Arquivo_fk_id_praca').val($(this).data('praca'));
        $('#Arquivo_fk_id_programa').val($(this).data('programa'));

    }

    Arquivo.init = function ($var) {
        console.log('oi')
        $('.checkVeiculoPracaPrograma').click(Arquivo.onClickVeiculoPracaPrograma);
        if($('#Arquivo_fk_id_veiculo').val()==0){
            $('#Arquivo_fk_id_veiculo').val("");

        }
        if($('#Arquivo_fk_id_praca').val()==0){
            $('#Arquivo_fk_id_praca').val("");

        }
        if($('#Arquivo_fk_id_programa').val()==0){
            $('#Arquivo_fk_id_programa').val("");

        }
    };
    return Arquivo;

})()