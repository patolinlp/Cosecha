<?php

namespace app\controllers;

use Yii;
use app\models\Cosechadia;
use app\models\CosechadiaSearch;
use app\models\EmpleadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CosechadiaController implements the CRUD actions for Cosechadia model.
 */
class CosechadiaController extends Controller
{
    public $defaultAction = 'index';

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cosechadia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CosechadiaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cosechadia model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cosechadia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $empleados = EmpleadoSearch::find()->all();
        $data = array();

        $model = new Cosechadia();

        foreach ($empleados as $empleado) {
            $data[$empleado->empleado_id] = $empleado->nombre . ' ' . $empleado->apellido;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cosechadia_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'data' => $data
            ]);
        }
    }

    /**
     * Updates an existing Cosechadia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $empleados = EmpleadoSearch::find()->all();
        $data = array();

        $model = $this->findModel($id);

        foreach ($empleados as $empleado) {
            $data[$empleado->empleado_id] = $empleado->nombre . ' ' . $empleado->apellido;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cosechadia_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'data' => $data
            ]);
        }
    }


    /**
     * Deletes an existing Cosechadia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cosechadia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Cosechadia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cosechadia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
