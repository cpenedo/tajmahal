<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Taj Mahal Cocktail Bar';
?>
<div class="site-index">

    <div class="jumbotron" style="padding-top: 0px !important;">

        <?php //echo \yii\helpers\Html::img('@web/images/tm_logo.jpg', [/*'style' => 'width: 185px; height: 126px'*/])?>

        <p>
        <?= \yii\helpers\Html::img('@web/images/tm_logo_sem_fundo_branco_2.png', ['style' => 'width: 400px; height: 400px'])?>
        </p>

            <?= Html::a(\yii\helpers\Html::img('@web/images/portugal_flag.png', ['style' => 'width: 120px; height: 80px']), ['langpt']) ?>

            <?= Html::a(\yii\helpers\Html::img('@web/images/united-kingdom-flag.png', ['style' => 'width: 120px; height: 80px']), ['langen']) ?>

    </div>

    <div class="body-content" style="color: white;">
    <div class="row">
        <div class="col-lg-12">
            <h3><?= Yii::t('app', 'Partners:') ?></h3>
        </div>
    </div>
                <div class="row">
                    <div class="col-md-2">
                        <a href="http://www.aguacastello.com/">
                            <?= \yii\helpers\Html::img('@web/images/castello-fixed.png', ['style' => 'width: 70px; height: 70px']) ?>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="http://www.aguacastello.com/">
                            <?= \yii\helpers\Html::img('@web/images/castello.png', ['style' => 'width: 70px; height: 70px']) ?>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="https://www.beefeatergin.com">
                            <?= \yii\helpers\Html::img('@web/images/beefeater-logo.gif', ['style' => 'width: 70px; height: 70px']) ?>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.absolut.com">
                        <?= \yii\helpers\Html::img('@web/images/absolut-vodka.jpg', ['style' => 'width: 140px; height: 70px']) ?>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a href="https://www.jamesonwhiskey.com">
                            <?= \yii\helpers\Html::img('@web/images/jameson-logo-fixed.png', ['style' => 'width: 245px; height: 56px; margin-top: 7px']) ?>
                        </a>
                    </div>
                </div>
                <!--<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>-->
</div>
</div>
