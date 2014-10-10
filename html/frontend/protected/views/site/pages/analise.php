<?php
/**
 * Created by IntelliJ IDEA.
 * User: frpereira
 * Date: 16/09/14
 * Time: 00:54
 */

?>
<div class="row " style="   min-height: 80px; margin-bottom:10px;">
    <div class="col-sm-12 well ">
        <?php
        echo CHtml::ajaxLink(
            '

                <i class="fa fa-reply"></i> Voltar aos painéis

            ',


            CController::createUrl('site/veiculo&id=' . $veiculo . '&idPraca=' . $praca),
            array(
                'type' => 'POST',

                'update' => '#container',
                'beforeSend' => 'function(){wait();}'
            ),
            array('id' => GUID::getGUID(), 'class' => 'btn btn-primary pull-left',
                'style' => 'position:absolute;'));;?>
        <div class="text-center">
            <h2 style="vertical-align: middle;display: inline;"><span class="small"></span> <?php echo $nome; ?></h2>
        </div>
        <div id="btn_ajuda_analise" class="btn btn-primary pull-right" style="right: 0px;margin-top: -29px;">

            <i class="fa fa-bell"></i> Ajuda

        </div>

    </div>

</div>

<?php
$frame_width = '100%';
if ($link_tipo == 'painel') $frame_width = '915px';;?>
<div class="row" style="text-align: center;">
    <div class="col-sm-12 " style="text-align: center;">

        <div style="text-align: center;width: <?php echo $frame_width; ?> !important; ">
            <div id="help_holder" style="height:756px; box-sizing: border-box; width:<?php echo $frame_width; ?> ; position: absolute">

            </div>
            <iframe src="<?php echo $link; ?>"
                    width="<?php echo $frame_width; ?> " height="756px" align="center" scrolling="no" style="border: none">
            </iframe>
        </div>
    </div>

</div>


<script type="application/javascript">

    var t= lorem();
  var testDAta = [
      {
          rect: {left: 734, top: 8, width: 175, height: 50},
          textRect: {left: 250, top: 50, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Digige o nome do anunciante nesta caixa de texto e aperte "Enter" ou clique na lupa para realizar a pesquisa</li>' +
              '<li>Esta é uma seleção opcional, o painel funcionará assumindo todos os anunciantes se nenhum for selecionado.</li>' +
              '<li>Você pode escolher mais de um assinante.</li>' +
              '</ul>',
          title: 'Seleção de Anunciante'
      },
      {
          rect: {left: 734, top: 117, width: 175, height: 50},
          textRect: {left: 250, top: 117, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Digige o nome da Agência nesta caixa de texto e aperte "Enter" ou clique na lupa para realizar a pesquisa</li>' +
              '<li>Esta é uma seleção opcional, o painel funcionará assumindo todos as agências se nenhuma for selecionada.</li>' +
              '<li>Você pode escolher mais de uma agência.</li>' +
              '</ul>',
          title: 'Seleção de Agência'
      },
      {
          rect: {left: 734, top: 202, width: 175, height: 93},
          textRect: {left: 250, top: 202, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Clique sobre a caixa de seleção "Setor ou Categoria" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
              '<li>O painel vem com todos Setores e Categorias selecionados por padrão</li>' +
              '<li>Na parte superior do painel você pode digitar uma palavra para filtrar os Setores/Categorias desejados.</li>' +
              '<li>Após fazer sua seleção, clique no botão "Aplicar" que fica no canto inferior direito  direito do painel.</li>' +
              '</ul>',
          title: 'Setor e Categoria'
      },
      {
          rect: {left: 734, top: 295, width: 175, height: 50},
          textRect: {left: 250, top: 295, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Clique sobre a caixa de seleção "Período de Análise" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
              '<li>Selecione o Período desejado.</li>' +
              '</ul>',
          title: 'Período de Análise'
      },
      {
          rect: {left: 734, top: 345, width: 175, height: 50},
          textRect: {left: 250, top: 320, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Clique sobre a caixa de seleção "Target" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
              '<li>Selecione o Target desejado.</li>' +
              '<li>Por padrão o Target selecionado é: Total de Domicílios.</li>' +
              '</ul>',
          title: 'Target'
      },
      {
          rect: {left: 734, top: 404, width: 175, height: 50},
          extraRects: [{left: 734, top: 458, width: 175, height: 50, color:'rgba(255,0,0,.5)'}],
          textRect: {left: 250, top: 320, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Clique sobre a caixa de seleção "Praça - Investimento" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
              '<li>O painel vem com todas as Praças selecionados por padrão</li>' +
              '<li>Na parte inferior do painel você pode digitar uma palavra para filtrar as Praças desejadas.</li>' +
              '<li>Após fazer sua seleção, clique no botão "Aplicar" que fica no canto inferior direito do painel.</li>' +
              '<li style="color:#ff090f" >Lembre-se de selecionar uma  "Praça - Audiência" correspondente com a "Praça - Investimento" selecionada.</li>' +
              '</ul>',
          title: 'Praça - Investimento'
      },
      {
          rect: {left: 734, top:458 , width: 175, height: 50},
          extraRects: [{left: 734, top: 404, width: 175, height: 50, color:'rgba(255,0,0,.5)'}],
          textRect: {left: 250, top: 320, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Clique sobre a caixa de seleção "Praça - Audiência" para aparecer o painel de aprimoramento da sua pesquisa.</li>' +
              '<li>O painel vem com todas as Praças selecionados por padrão</li>' +
              '<li>Na parte inferior do painel você pode digitar uma palavra para filtrar as Praças desejadas.</li>' +
              '<li>Após fazer sua seleção, clique no botão "Aplicar" que fica no canto inferior direito do painel.</li>' +
              '<li style="color:#ff090f" >Lembre-se de selecionar uma  "Praça - Investimento" correspondente com a "Praça - Audiência" selecionada.</li>' +
              '</ul>',
          title: 'Praça - Audiência'
      },
      {
          rect: {left: 734, top:505 , width: 175, height: 170},
          textRect: {left: 250, top: 320, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Você pode alterar o desconto de cada emissora caso tenha uma informação mais precisa sobre o desconto praticado ou para fazer simulações .</li>' +
              '<li>Clique no campo respectivo à emissora que deseja alterar o desconto e digite o novo valor.</li>' +
              '<li>Tecle "Enter" para atualizar o novo valor.</li>' +

              '</ul>',
          title: 'Descontos'
      },
      {
          rect: {left: 558, top:558 , width: 100, height: 130},
          textRect: {left: 250, top: 320, width: 470, height: 'auto'},
          text: '<ul>' +
              '<li>Estes valores representam a variação entre os dois períodos</li>' +
              '<li>Verde para um crescimento do share e vermelho para uma diminuição.</li>' +

              '</ul>',
          title: 'Descontos'
      }

  ];
    $(document).ready(function () {
        $('#help_holder').hide();

        $('#btn_ajuda_analise').unbind('click').on('click', function () {
            $('#help_holder').fadeIn();
            new HelpAnalise(testDAta , 'help_holder');
            //draw({left: 30, top: 200, width: 100, height: 300});
        });

//        $('.btn-upload-item').unbind('click').on('click',function(){
//
//
//        })


    });



    function lorem() {
        return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend mi neque, ultricies efficitur augue elementum et. ' +
            'Donec id elit velit. Vivamus quis tristique metus. Duis id fringilla velit. Aliquam faucibus nec elit vel facilisis. ';
    }


</script>

<?php
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/HelpAnalise.js', CClientScript::POS_END);
//$cs->registerScript('startScript_analise', "ArquivoTagBehavior.initTagBehavior('".$classCheckBox. "')", CClientScript::POS_READY);
?>

