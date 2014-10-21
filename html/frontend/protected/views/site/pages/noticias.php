<div class="row margin-bottom-40">
    <!-- BEGIN CONTENT -->
    <div class="col-md-12 col-sm-12">
        <h1><?php echo $data['model']['nome_noticia']; ?></h1>
        <hr class="blog-post-sep">
        <div class="content-page">
            <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->

                <div class="col-md-9 col-sm-9 blog-posts">
                    <?php foreach ($data['rss'] as $rss) { ?>
                        <div class="row" id="noticias-body">


                            <div class="col-md-12 col-sm-12">
                                <h2><a href="<?php echo $rss['link']; ?>"><?php echo $rss['title']; ?> </a></h2>
                                <ul class="blog-info">
                                    <li><i class="fa fa-calendar"></i><?php echo $rss['pubDate']; ?></li>
                                </ul>
                                <p><?php echo $rss['description']; ?></p>
                                <a href="<?php echo $rss['link']; ?>" class="more">Ler Mais <i class="icon-angle-right"></i></a>
                            </div>

                        </div>
                        <hr class="blog-post-sep">

                    <?php } ?>


                </div>
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->
                <div class="col-md-3 col-sm-3 blog-sidebar">
                    <!-- CATEGORIES START -->
                    <h2 class="no-top-space">Lista de Notícias</h2>
                    <ul class="nav sidebar-categories margin-bottom-40">


                        <?php foreach ($data['noticias'] as $noticia) { ?>

                            <li class="<?php echo $noticia->id_noticia == $data['id'] ? 'active' : ''; ?>">
                                <?php echo CHtml::ajaxLink(
                                    $noticia->nome_noticia,
                                    CController::createUrl('site/noticias'),
                                    array(
                                        'type' => 'POST',
                                        'update' => '#container',
                                        'data' => array('id_noticia' => $noticia->id_noticia),
                                        'beforeSend' => 'function(){onClickNoticia();}'
                                    ),
                                    array(
                                        'hrf' => '#', // Yii::app()->createUrl( 'site/noticias' )
                                        'id' => GUID::getGUID(),
                                        "live" => false
                                    )
                                );;?>
                            </li>

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>