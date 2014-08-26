/**
 * Created by filiperp on 8/25/14.
 */
var Programa;
Programa = (function () {
    'use strict';
    function Programa() {


    }



    Programa.init = function ($var) {
        $(".checkVeiculoPraca").click( Programa.onClickVeiculoPraca)
    };

    Programa.onClickVeiculoPraca = function ($var) {
        var veiculo = $(this).data('veiculo');
        var praca = $(this).data('praca');
        var programa = $(this).data('programa');
        var selected = $(this).is(':checked');
        console.log(selected)
        $('#btnSubmmitForm').hide()
        jQuery.ajax({
            // The url must be appropriate for your configuration;
            // this works with the default config of 1.1.11

            url: 'index.php?r=programa/updateVeiculoPraca',
            type: "POST",
            data: {veiculo:veiculo, praca:praca,programa:programa, isselected: selected},
            error: function(xhr,tStatus,e){
                console.log(xhr)
                console.log(tStatus)
                console.log(e)
                if(!xhr){
                    alert(" We have an error ");
                    alert(tStatus+"   "+e.message);
                }else{
                    alert("else: "+e.message); // the great unknown
                }
            },
            success: function(resp){
               $('#btnSubmmitForm').show();
                console.log(resp)
            }
        });
        //console.log(veiculo,praca)
    }
    return Programa;

 })()