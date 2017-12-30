<?php

namespace kouosl\emergency\controllers\backend;

use Yii;
use kouosl\emergency\models\emergency;
use kouosl\emergency\models\EmergencySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * emergencyController implements the CRUD actions for Emergency model.
 */
class EmergencyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Emergency models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmergencySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Emergency model.
     * @param integer $TCKNO
     * @return mixed
     */
    public function actionView($TCKNO)
    {
        return $this->render('view', [
            'model' => $this->findModel($TCKNO),
        ]);
    }

    /**
     * Creates a new Emergency model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Emergency();

		
		İf ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'TCKNO' => $model->TCKNO]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Emergency model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $TCKNO
     * @return mixed
     */
    public function actionUpdate($TCKNO)
    {
        $model = $this->findModel($TCKNO);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'TCKNO' => $model->TCKNO]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Emergency model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $TCKNO
     * @return mixed
     */
    public function actionDelete($TCKNO)
    {
        $this->findModel($TCKNO)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Emergency model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $TCKNO
     * @return Emergency the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($TCKNO)
    {
        if (($model = Emergency::findOne($TCKNO)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
