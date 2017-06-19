<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\imagine\Image;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<style>
    body {
        background-image: url("http://tajmahal.dev/images/bar3.jpg");
        background-repeat:no-repeat;

        background-size: cover; /* for IE9+, Safari 4.1+, Chrome 3.0+, Firefox 3.6+ */
        -webkit-background-size: cover; /* for Safari 3.0 - 4.0 , Chrome 1.0 - 3.0 */
        -moz-background-size: cover; /* optional for Firefox 3.6 */
        -o-background-size: cover; /* for Opera 9.5 */
        margin: 0; /* to remove the default white margin of body */
        padding: 0; /* to remove the default white margin of body */
    }
</style>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode('Taj Mahal Cocktail Bar') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php

    // frame, rotate and save an image
    Image::thumbnail('http://tajmahal.dev/images/taj-logo.jpg', 40, 40)
        ->save(Yii::getAlias('@webroot/images/logo.jpg'), ['jpeg_quality' => 100]);

    NavBar::begin([
        'brandLabel' => \yii\helpers\Html::img('@web/images/tm_logo_branco_baixo.png', ['style' => 'width: 80px; height: 35px'])
    /*'<span>'.\yii\helpers\Html::img('@web/images/logo.jpg').*/,//.'</span>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
            //'style' => 'padding: 10px 15px !important'
            //'style' => 'background-color: white'
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'O Conceito', 'url' => ['/site/concept']],
            ['label' => 'O Espaço', 'url' => ['/site/contact']],
            ['label' => 'Carta de Bar', 'url' => ['/site/contact']],
            ['label' => 'Sobre Nós', 'url' => ['/site/about']],
            ['label' => 'Contactos/Localização', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p style="text-align: center">&copy; Taj Mahal The Premium Cocktail Bar <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
