<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Taj Mahal Cocktail Bar';
//echo \yii\helpers\Url::to('@web/images/partners/logo.jpg') . "\n";
?>

<div class="site-index">

    <div class="jumbotron" style="padding-top: 0px !important;">

        <?php //echo \yii\helpers\Html::img('@web/images/tm_logo.jpg', [/*'style' => 'width: 185px; height: 126px'*/])?>

        <p>
        <?php //echo \yii\helpers\Html::img('@web/images/logo-tajmahal-vetorial.png', ['style' => 'width: 400px; height: 400px'])?>
        <?= \yii\helpers\Html::img('@web/images/logo-tajmahal-vetorial.png', ['style' => 'max-width: 50%; max-height: 70%'])?>
        </p>

        <!--<div style="padding-top: 70px"></div>-->


            <?php //echo Html::a(\yii\helpers\Html::img('@web/images/portugal_flag.png', ['style' => 'width: 120px; height: 80px']), ['langpt']) ?>

            <?php //echo Html::a(\yii\helpers\Html::img('@web/images/united-kingdom-flag.png', ['style' => 'width: 120px; height: 80px']), ['langen']) ?>

    </div>
    <b><h2 style="/*font-size: 48px;*/ color: white; padding-bottom: 30px; font-family: 'Lucida Calligraphy'; text-align: center">"I'm having mixed drinks about feelings."</h2></b>


    <div class="body-content" style="color: white;">
    <div class="row">
        <div class="col-lg-12">
            <h5><?= Yii::t('app', 'Partners:') ?></h5>
        </div>
    </div>

        <?php if(Yii::$app->params['devicedetect']['isDesktop']) : ?>
            <div class="row" style="padding: 10px">
                <div class="col-md-2" style="text-align: center">
                    <a href="http://www.aguacastello.com/" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/castello-fixed.png', ['style' => 'width: 70px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage-3.png', ['style' => 'max-width: 30%;']) ?>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <a href="http://www.aguacastello.com/" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/castello.png', ['style' => 'width: 70px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage-2.png', ['style' => 'max-width: 50%; ']) ?>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <a href="https://www.beefeatergin.com" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/partners/Masterbrand_Logo_Lock-up_RGB.png', ['style' => 'width: 140px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage-1.png', ['style' => 'max-width: 70%; ']) ?>
                    </a>
                </div>
                <div class="col-md-3" style="text-align: center">
                    <a href="https://www.absolut.com" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/partners/absolut-logo-no-background.png', ['style' => 'width: 140px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage.png', ['style' => 'max-width: 70%;']) ?>
                    </a>
                </div>
                <div class="col-md-3" style="text-align: center">
                    <a href="https://www.jamesonwhiskey.com" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/partners/jameson-logo-fixed.png', ['style' => 'width: 230px; height: 56px; margin-top: 7px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/jameson-logo-fixed.png', ['style' => 'max-width: 70%;']) ?>
                    </a>
                </div>
            </div>
        <?php elseif (Yii::$app->params['devicedetect']['isMobile'] || Yii::$app->params['devicedetect']['isTablet']) : ?>
            <div class="row" style="padding: 10px">
                <div class="col-md-2" style="text-align: center">
                    <a href="http://www.aguacastello.com/" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/castello-fixed.png', ['style' => 'width: 70px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage-3.png', ['style' => 'max-width: 20%;']) ?>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <a href="http://www.aguacastello.com/" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/castello.png', ['style' => 'width: 70px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage-2.png', ['style' => 'max-width: 35%; ']) ?>
                    </a>
                </div>
                <div class="col-md-2" style="text-align: center">
                    <a href="https://www.beefeatergin.com" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/partners/Masterbrand_Logo_Lock-up_RGB.png', ['style' => 'width: 140px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage-1.png', ['style' => 'max-width: 40%; ']) ?>
                    </a>
                </div>
                <div class="col-md-3" style="text-align: center">
                    <a href="https://www.absolut.com" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/partners/absolut-logo-no-background.png', ['style' => 'width: 140px; height: 70px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/Webp.net-resizeimage.png', ['style' => 'max-width: 40%;']) ?>
                    </a>
                </div>
                <div class="col-md-3" style="text-align: center">
                    <a href="https://www.jamesonwhiskey.com" target="_blank">
                        <?php //echo \yii\helpers\Html::img('@web/images/partners/jameson-logo-fixed.png', ['style' => 'width: 230px; height: 56px; margin-top: 7px']) ?>
                        <?= \yii\helpers\Html::img('@web/images/partners/jameson-logo-fixed.png', ['style' => 'max-width: 40%;']) ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
</div>
</div>
