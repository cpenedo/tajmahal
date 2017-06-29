<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Recruitment Form');

?>
<div class="site-contact" style="color: white;">
    <p style="text-align: center">
        <?= \yii\helpers\Html::img('@web/images/tm_logo_branco_baixo.png', ['style' => 'width: 400px; height: 130px; margin: 10px 10px'])?>
    </p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('Success')): ?>
        <div class="alert alert-success">
            <?= Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.') ?>
        </div>
        <!--
        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?php // echo Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>
-->
    <?php else: ?>



    <?php $form = ActiveForm::begin([
        'id' => 'contact-form',
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'email') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'contact') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'motivation')->textarea(['rows' => 6, 'style' => 'resize:vertical',
                'placeholder' => "Não sendo obrigatório, aconcelhamos mensionar as suas motivações, a disponibilidade horária e a que procura, vencimento pretendido...entre outras indicações que achar relevantes à actividade.",
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'cv')->widget(FileInput::className(),
                [
                    //'name' => 'attachment_53',
                    'pluginOptions' => [
                        'showPreview' => false,
                        'showCaption' => true,
                        'showRemove' => true,
                        'showUpload' => false,
                        'browseClass' => 'btn btn-primary btn-block',
                        'browseIcon' => '<i class="fa fa-picture-o"></i> ',
                        'browseLabel' =>  Yii::t('app', 'Select CV')
                    ],
                    'options' => ['accept' => 'pdf', 'multiple' => false]]) ?>
        </div>

        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'template' => '<div class="col-md-3"><div class="pull-right">{image}</div></div><div class="col-md-3">{input}</div>',
        ]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary pull-right', 'name' => 'contact-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
<?php endif; ?>
</div>
