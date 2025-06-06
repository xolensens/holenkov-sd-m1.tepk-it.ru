<?php

namespace app\controllers;

use app\models\Workshop;
use app\models\WorkshopSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WorkshopController implements the CRUD actions for Workshop model.
 */
class WorkshopController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Workshop models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WorkshopSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Workshop model.
     * @param int $id_workshop Id Workshop
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_workshop)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_workshop),
        ]);
    }

    /**
     * Creates a new Workshop model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Workshop();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_workshop' => $model->id_workshop]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Workshop model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_workshop Id Workshop
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_workshop)
    {
        $model = $this->findModel($id_workshop);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_workshop' => $model->id_workshop]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Workshop model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_workshop Id Workshop
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_workshop)
    {
        $this->findModel($id_workshop)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Workshop model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_workshop Id Workshop
     * @return Workshop the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_workshop)
    {
        if (($model = Workshop::findOne(['id_workshop' => $id_workshop])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
