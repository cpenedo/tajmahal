<?php

namespace app\controllers;

use app\models\RecruitmentForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function beforeAction($action) {
        if (Yii::$app->session->has('language')) {
            Yii::$app->language = Yii::$app->session->get('language');
        } else {
            //or you may want to set lang session, this is just a sample
            Yii::$app->language = 'pt-PT';
        }
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        Yii::$app->session->set('currentActions', Yii::$app->controller->action->id);
        return parent::afterAction($action, $result); // TODO: Change the autogenerated stub
    }

    public function actionLangen(){
        Yii::$app->session->set('language', 'en-EN'); //or $_GET['lang']
        $action = Yii::$app->session->get('currentActions');
        return $this->redirect([$action]);
    }

    public function actionLangpt(){
        Yii::$app->session->set('language', 'pt-PT'); //or $_GET['lang']
        $action = Yii::$app->session->get('currentActions');
        return $this->redirect([$action]);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    /*public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }*/

    /**
     * Logout action.
     *
     * @return Response
     */
    /*public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }*/

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            //Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->session->setFlash('Success', Yii::t('app', 'Email Sent!'));
            return $this->redirect(['contact']);
            //return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionConcept()
    {
        return $this->render('concept');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionSpace()
    {
        $title = Yii::t('app', 'The Space');

        return $this->render('soon-available', ['title' => $title]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionChart()
    {
        $title = Yii::t('app', 'Bar Menu');

        return $this->render('soon-available', ['title' => $title]);
    }

    public function actionRecruitment()
    {
        $model = new RecruitmentForm();

        if ($model->load(Yii::$app->request->post())) {

            $model->cv = UploadedFile::getInstance($model, 'cv');

            if($model->cv) {
                $randName = rand(9999, 999999);
                $model->cv->saveAs('cv/' . $model->cv->baseName . $randName . '.' . $model->cv->extension);
                if($model->contact(Yii::$app->params['adminEmail'], $randName)) {
                    Yii::$app->session->setFlash('Success', Yii::t('app', 'Email Sent!'));
                }
                return $this->redirect(['recruitment']);
            }

            /*if($model->upload()) {
                if($model->contact(Yii::$app->params['adminEmail'])) {
                    Yii::$app->session->setFlash('Success', Yii::t('app', 'Email Sent!'));
                }
                return $this->redirect(['recruitment']);
            }*/

            //return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('recruitment', ['model' => $model]);
        }
    }
}
