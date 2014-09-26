/**
 * Created by frpereira on 26/09/14.
 */
var ArquivoTagBehavior;
ArquivoTagBehavior = (function () {
    'use strict';
    function ArquivoTagBehavior() {

    }

ArquivoTagBehavior.class= '';

    ArquivoTagBehavior.initTagBehavior = function ($classTag) {
        ArquivoTagBehavior.class=$classTag;
        $('.'+$classTag).change(function(){
            $('.'+ ArquivoTagBehavior.class).attr('checked', false).parent().removeClass('checked');

            $(this).attr('checked', true);
           switch(parseInt($(this).val())){
               case 14:
               case 15:
                   $('#Arquivo_caminho_arquivo').show()
                   $('#Arquivo_image').hide();
                   break;
               default:
                   $('#Arquivo_caminho_arquivo').hide()
                   $('#Arquivo_image').show();
                   break;

           }

        })




    };
    return ArquivoTagBehavior;

 })();