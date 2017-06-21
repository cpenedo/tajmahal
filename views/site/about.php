<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Sobre Nós';
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
        <?= \yii\helpers\Html::img('@web/images/tm_logo_branco_baixo.png', ['style' => 'width: 400px; height: 130px; margin: 10px 10px'])?>
    </p>

    <h1 style="color: white; text-align: center; padding-bottom: 10px"><?= Html::encode($this->title) ?></h1>

    <p style="color: white; font-size: 14pt; text-align: justify">
        O projeto “Taj Mahal – The Premium Cocktail Bar” nasce por iniciativa de João Xavier e Tiago Ramos com base em toda a experiência acumulada ao logo dos anos em coquetelaria. Juntos, nascemos para a coquetelaria ainda antes da maioridade. Somos naturais de uma pequena cidade Ribatejana de nome Almeirim, mas foi pelos mais diversos cantos sobretudo do nosso pais que desenvolvemos e criamos as nossas capacidades, gostos, técnicas e conhecemos diversas culturas. Fomos companheiros de diversão e de muito trabalho em algumas casas mas, aos 22 anos, a vida e a ambição definiram que cada um seguisse projectos em casas diferentes. A amizade sempre se manteve e foi nessa base que continuamos a partilhar ideias, experiências e treino, muito treino para aprimorar o melhor serviço possível!
    <p style="color: white; font-size: 14pt; text-align: justify">
        Partilhamos a ambição, o profissionalismo, a dedicação e uma paixão enorme pela coquetelaria!
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        Ambos formamo-nos em diversas áreas da coquetelaria desde a sua história às técnicas mais avançadas de serviço e contamos ainda com parcerias de marcas de renome e qualidade mundial que estão presentes igualmente nesta nossa e também vossa casa. Somos certificados para Higiene e Segurança Alimentar e ambos possuímos seguro de trabalho para a prestação de serviços a que nos propomos.
    </p>
    <p style="color: white; font-size: 14pt; text-align: justify">
        O Flair Bartending está-nos também no sangue e na ponta dos dedos pelo que pode ainda contar com requinte nas técnicas de bar, presenteadas com Working Flair para além de saborosas bebidas preparadas com enorme gosto, vontade e paixão!
    </p>

        <div class="row" style="color: white;">
            <div class="col-md-3">
                <?= \yii\helpers\Html::img('@web/images/jx1.jpg', ['onmouseover'=>"$(this).attr('src', '/images/jx1-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', '/images/jx1.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
            </div>
            <div class="col-md-3">
                <?= \yii\helpers\Html::img('@web/images/jx2.jpg', ['onmouseover'=>"$(this).attr('src', '/images/jx2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', '/images/jx2.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
            </div>
            <div class="col-md-3">
                <?= \yii\helpers\Html::img('@web/images/tr1.jpg', ['onmouseover'=>"$(this).attr('src', '/images/tr1-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', '/images/tr1.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
            </div>
            <div class="col-md-3">
                <?= \yii\helpers\Html::img('@web/images/tr2.jpg', ['onmouseover'=>"$(this).attr('src', '/images/tr2-subtitle.jpg');", 'onmouseout' => "$(this).attr('src', '/images/tr2.jpg');", 'style' => 'width: 200px; height: 200px;'])?>
            </div>
        </div>

    </div>
