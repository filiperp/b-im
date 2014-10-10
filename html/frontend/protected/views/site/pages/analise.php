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
          rect:{left: 30, top: 200, width: 300, height: 100},
          textRect:{left: 60, top: 400, width: 300, height: 100},
          text: '1'+t
      },
      {
          rect:{left: 80, top: 400, width: 300, height: 100},
          textRect:{left: 100, top: 400, width: 300, height: 100},
          text: '2'+  t
      },
      {
          rect:{left: 30, top: 100, width: 300, height: 100},
          textRect:{left: 60, top: 400, width: 300, height: 100},
          text: '3'+t
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

