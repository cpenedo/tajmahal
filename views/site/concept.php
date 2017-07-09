<?php
/**
 * Created by PhpStorm.
 * User: c.penedo
 * Date: 16/06/2017
 * Time: 19:05
 */

use yii\helpers\Html;

$this->title = Yii::t('app', 'The Concept');

?>
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
        <?= Yii::t('app', 'The Taj Mahal Mausoleum in Agra, India, is a UNESCO World Heritage Site and the most famous tourist spot in the country.'); ?>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'A monument dating from 1632-1652 was built with the strength of 20,000 men from various cities of the East, at the request of the emperor Shah Jahan. The sumptuous white marble monument was built at the request of the emperor in memory of his favorite wife Aryumand Banu Begam, whom he called the Mumtaz Mahal ("The Palace Jewel") who died after bringing the 14th child to the world, the Taj Mahal was built on its tomb, next to the river Yamuna.'); ?>
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'The word "Taj" comes from the Persian, Mughal court language, and means "Crown", while "Mahal" is a short variant of Mumtaz Mahal, which was the formal name in court of the emperor\'s favorite wife.'); ?>
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'Like the monument, known as the world\'s greatest love affair, the "Taj Mahal" bar will be one of the greatest proofs of love for the world of cocktail and harmony that we want to present to you.'); ?>
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', 'In this way, the concept goes through working cocktails, infusions, coffees and shishas, ​​giving you an experience of palates, aromas and unique sensations.'); ?>
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        <?= Yii::t('app', '"Taj Mahal" will be a clean space, more oriented towards an oriental style, with personalized service for you to enjoy, the oriental sound varied with classic commercial rock music involved with oriental notes in a lounge, the pleasure of experiencing the presence of friends, Harmony and good energies!'); ?>
    </p>
    <p style="color: white; font-size: 16pt; text-align: justify; padding-top: 15px">
        <?= Yii::t('app', '“ THE SECRET OF HEALTH FOR BOTH MIND AND BODY IS NOT TO MOURN FOR THE PAST, WORRY ABOUT THE FUTURE, OR ANTICIPATE TROUBLES, BUT TO LIVE IN THE PRESENT MOMENT WISELY AND EARNESTLY. ” - Siddhartha Gautama')?>
    </p>

</div>
