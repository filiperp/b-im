<?php
/**
 * Created by IntelliJ IDEA.
 * User: filiperp
 * Date: 8/15/14
 * Time: 2:31 PM
 */

echo $dado;
?>



<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => Yii::app()->createUrl('site/form1'),
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'validateOnChange' => true,
            'validateOnType' => true,

        )

    ));
    ?>
    <div class="row"
    <?php
    echo $form->labelEx($model, 'nome');
    echo $form->textField($model, 'nome');
    echo $form->error($model, 'nome')
    ?>
</div>


<?php if (CCaptcha::checkRequirements()): ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'captcha'); ?>
        <div>

            <?php
            $this->widget('CCaptcha',
            array());
            echo $form->textField($model, 'captcha');

            ?>
        </div>
        <div class="hint">
            digite o texto da imagem
        </div>

        <?php
          echo $form->error ($model, 'captcha');
        ?>
    </div>

<?php endif; ?>


<div class="row">

    <?php
    echo CHtml::submitButton('vai!!!');
    ?>
</div>
<?php
$this->endWidget();
?>

</div>


