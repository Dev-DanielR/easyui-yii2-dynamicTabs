<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;

$theme = Yii::$app->session->get('user.theme');
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="easyui/themes/<?= $theme ?>/easyui.css"> 
    <link rel="stylesheet" href="easyui/themes/icon.css">
    <link rel="stylesheet" href="custom/site.css">
</head>
<body class="easyui-layout" data-options="fit:true">
<?php $this->beginBody() ?>
<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
