<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Comments;

use app\models\Doctor;
use app\models\DoctorSearch;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['pageone','index','pagetwo','pagethree'],
                'rules' => [
                    [
                        'actions' => ['pageone','index','pagetwo','pagethree'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                    //  // deny all POST requests
                    // [
                    //     'allow' => false,
                    //     'verbs' => ['POST']
                    // ],
                ],
            ],
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'logout' => ['post'],
            //     ],
            // ],
        ];
    }

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

    public function actionPageone()
    {
        
        // search model
        $model = new DoctorSearch();

        // doctor model
        $doctorModel = new Doctor();

        // find 4 doctors
        $dislpayDoctors = Doctor::find()->limit(4)->all();

        $this->layout="frontlayout";

        // throw new \yii\web\NotFoundHttpException("Page no longer exists");

        return $this->render('pageone', [
            'model' => $model,
            'dislpayDoctors' => $dislpayDoctors,
        ]);
    }

//     public function beforeAction($action)
// {
//     if (parent::beforeAction($action)) {
//         // change layout for error action
//         if ($action->id=='error')
//              $this->layout ='404';
//         return true;
//     } else {
//         return false;
//     }
// }


    /**
     * Serach doctors.
     * @return mixed
     */
    public function actionSr()
    {
        $this->layout="frontlayout"; 

        // use the DoctorSearch model
        $searchModel = new DoctorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=5;
        // in order to not use the grid view
        // get the model with the data/results from the data provider
        // you can then loop over the data/results them as a normal array
        $resultsModel = $dataProvider->getModels();

        // http://stackoverflow.com/questions/28803234/yii2-display-data-from-the-database-without-using-gridview

        return $this->render('pagetwo', [
            // 'searchModel' => $searchModel,
            'resultsModel' => $resultsModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPagetwo()
    {
        $this->layout="frontlayout";
        return $this->render('pagetwo');
    }

    public function actionPagethree($id)
    {
        $this->layout="frontlayout";
        // return $this->render('pagethree');
        // $doctorModel = new Doctor();
        $doctorModel = Doctor::findOne($id);

        $commentsModel = new Comments();

        // get all comments
        $Comments = Comments::find()->all();

        return $this->render('pagethree', [
            'doctorModel' => $doctorModel,
            'commentsModel' => $commentsModel,
            'Comments' => $Comments,
        ]);
    }

    public function actionIndex()
    {
        // return $this->render('index');
        // Yii::$app->runAction('site/pageone');

        // search model
        $model = new DoctorSearch();

        // doctor model
        $doctorModel = new Doctor();

        // find 4 doctors
        $dislpayDoctors = Doctor::find()->limit(4)->all();

        $this->layout="frontlayout";

        return $this->render('pageone', [
            'model' => $model,
            'dislpayDoctors' => $dislpayDoctors,
        ]);
    }

    public function actionLogin()
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
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
