<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'About Us');
?>
<style>
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }
</style>

<script type="text/javascript">
    function bigImg(x) {
        x.style.height = "400px";
        x.style.width = "400px";

        x.tooltip = "aaaaaaaaaa";
    }

    function normalImg(x) {
        x.style.height = "200px";
        x.style.width = "200px";
    }
</script>

<div class="site-about">
    <p style="text-align: center">
        <?php //echo \yii\helpers\Html::img('@web/images/tm_logo_branco_baixo.png', ['style' => 'width: 400px; height: 130px; margin: 10px 10px'])?>
        <?php
        $widthDevice = null;
        if(Yii::$app->params['devicedetect']['isMobile'] || Yii::$app->params['devicedetect']['isTablet']) {
            $widthDevice = '80%';
        } elseif(Yii::$app->params['devicedetect']['isDesktop']) {
            $widthDevice = '40%';
        }
        ?>
        <?= \yii\helpers\Html::img('@web/images/taj-vect-logo.png', ['style' => "max-width: $widthDevice"])?>
    </p>

    <?php if(Yii::$app->params['devicedetect']['isMobile'] || Yii::$app->params['devicedetect']['isTablet']) : ?>
        <h3 style="color: white; text-align: center; padding-bottom: 10px"><?= Html::encode($this->title) ?></h3>
    <?php elseif (Yii::$app->params['devicedetect']['isDesktop']) : ?>
        <h1 style="color: white; text-align: center; padding-bottom: 10px"><?= Html::encode($this->title) ?></h1>
    <?php endif; ?>

    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'The project "Taj Mahal - The Premium Cocktail Bar" was born on the initiative of João Xavier and Tiago Ramos based on the experience built up after years of mixing drinks. Together, we borned to the art of mixing drinks even before the age of majority. We are from a small town named Almeirim in Ribatejo, but it was in the most diverse corners of our country that we developed and created our capacities, tastes, techniques and known different cultures. We were fun and hardworking companions in some houses, but at age 22, life and ambition meant that each one would follow projects in different houses. The friendship has always been maintained and it was on this basis that we continue to share ideas, experiences and training, much training to improve the best service possible!'); ?>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'We share the ambition, the professionalism, the dedication and a huge passion for the art of mixing drinks!'); ?>
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'We have formed in many areas of the cocktail art, from its history to the most advanced techniques of service and we also have partnerships of brands of world renown and quality that are present in our and also your home. We are certified for Food Hygiene and Security and both have work insurance for the provision of services to which we propose.'); ?>
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'Flair Bartending is also in our blood and fingertips so you can still count on refined bar techniques, presented with Working Flair as well as tasty drinks prepared with great taste, desire and passion!'); ?>
    </p>

        <div class="row" style="color: white;">
            <div class="col-md-3" style="text-align: center; margin-bottom: 5%; margin-top: 5%;">
                <?php //echo \yii\helpers\Html::img('@web/images/jx1.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx1-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx1.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
                <?= \yii\helpers\Html::img('@web/images/jx1.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx1.2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx1.jpg');", 'style' => 'max-width: 80%;'])?>
            </div>
            <div class="col-md-3" style="text-align: center; margin-bottom: 5%; margin-top: 5%;">
                <?php //echo \yii\helpers\Html::img('@web/images/jx2.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx2.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
                <?= \yii\helpers\Html::img('@web/images/jx2.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx2.2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/jx2.jpg');", 'style' => 'max-width: 80%;'])?>
            </div>
            <div class="col-md-3" style="text-align: center; margin-bottom: 5%; margin-top: 5%;">
                <?php //echo \yii\helpers\Html::img('@web/images/tr1.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr1-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr1.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
                <?= \yii\helpers\Html::img('@web/images/tr1.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr1.2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr1.jpg');", 'style' => 'max-width: 80%;'])?>
            </div>
            <div class="col-md-3" style="text-align: center; margin-bottom: 5%; margin-top: 5%;">
                <?php //echo \yii\helpers\Html::img('@web/images/tr2.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr2.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
                <?= \yii\helpers\Html::img('@web/images/tr2.jpg', ['onmouseover'=>"$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr2.2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', 'http://www.tajmahalbar.com/tajmahal/web/images/tr2.jpg');", 'style' => 'max-width: 80%;'])?>
            </div>
        </div>

    </div>
