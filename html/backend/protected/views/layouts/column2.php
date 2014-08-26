<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

    <div class="row">

        <div class="col-sm-12 last">

                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(

                    'htmlOptions' => array('class' => 'page-bar'),
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items' => $this->menu,
                    'htmlOptions' => array('class' => 'page-breadcrumb'),
                ));
                $this->endWidget();
                ?>

            <!-- sidebar -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="content">
                <?php echo $content; ?>
            </div>
            <!-- content -->
        </div>
    </div>
<?php $this->endContent(); ?>