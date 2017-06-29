<?php
/**
 * Created by PhpStorm.
 * User: c.penedo
 * Date: 29/06/2017
 * Time: 15:59
 */

namespace app\models;

use Yii;
use yii\base\Model;

class RecruitmentForm extends Model
{
    public $name;
    public $email;
    public $contact;
    public $motivation;
    public $verifyCode;
    public $cv;

    public function rules()
    {
        return [
            [['name', 'email', 'contact', 'cv'], 'required'],
            ['contact', 'integer'],
            [['name', 'motivation'], 'string'],
            ['email', 'email'],
            ['verifyCode', 'captcha'],
            ['cv', 'safe'],
            [
                ['cv'],
                'file', 'skipOnEmpty' => false, 'extensions' => 'pdf'
            ],
        ];
    }
    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
            'email' => 'Email',
            'contact' => Yii::t('app', 'Contact'),
            'motivation' => Yii::t('app', 'Motivation'),
            'cv' => Yii::t('app', 'Attach CV'),
            'verifyCode' => Yii::t('app', 'Verify Code')
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->cv->saveAs('cv/' . $this->cv->baseName . '.' . $this->cv->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email, $randName)
    {
            Yii::$app->mailer->compose('body', ['model' => $this])
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject('Candidatura de Recrutamento')
                ->attach('cv/' . $this->cv->baseName . $randName . '.' . $this->cv->extension)
                //->setTextBody($this->body)
                ->send();

            return true;
    }
}