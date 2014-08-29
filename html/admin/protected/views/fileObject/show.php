<html>
<head>
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <title>Show images</title>
</head>
<body>
<h1>Sent images</h1>
<?php if(count($data) == 0): ?>
    None so far!
<?php else: ?>
    <?php foreach($data as $entry):	?>
        <p>
            <?php echo CHtml::link($entry, $entry); ?>
        </p>
    <?php endforeach; endif; ?>
</body>
</html>