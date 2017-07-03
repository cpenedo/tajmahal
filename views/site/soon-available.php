<?php
/**
 * Created by PhpStorm.
 * User: c.penedo
 * Date: 21/06/2017
 * Time: 10:22
 */

use yii\helpers\Html;

$this->title = $title;

?>
<div class="site-about">
    <p style="text-align: center">
        <?php echo \yii\helpers\Html::img('@web/images/tm_logo_branco_baixo.png', ['style' => 'width: 400px; height: 130px; margin: 10px 10px'])?>
        <?php //echo \yii\helpers\Html::img('@web/images/tm_logo_branco_baixo.png', ['style' => 'max-width: 40%; margin: 10px 10px'])?>
    </p>

    <h1 style="color: white; text-align: center; padding-bottom: 10px"><?= Html::encode($this->title) ?></h1>

    <div style="text-align: center"><?= Html::img('@web/images/coming-soon.png', ['style' => 'width: 300px; height: 250px'])?></div>

</div>