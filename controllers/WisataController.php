<?php

namespace app\controllers;

use Yii;
use yii\web\UploadedFile;
use app\models\Wisata;
use app\models\WisataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WisataController implements the CRUD actions for Wisata model.
 */
class WisataController extends Controller
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
     * Lists all Wisata models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WisataSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Wisata model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Wisata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Wisata();

        if ($model->load(Yii::$app->request->post())) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            if ($model->foto) {
                $photos = $model->foto->name;
                if ($model->foto->saveAs('files/images/wisata_images/' . $photos)) {
                    $model->foto = $photos;
                }
            }

            $model->save();

            return $this->redirect(['view', 'id' => $model->id_wisata]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Wisata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $old_photo_user = $model->foto;

        if ($model->load(Yii::$app->request->post()) ) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            if($model->foto){
                $pp = $model->foto->name;
                if($model->foto->saveAs('files/images/wisata_images/' .$pp)) {
                   $model->foto =$pp;
                }
            }
            if (empty($model->foto)){
                $model->foto = $old_photo_user;
            }
            $model->save(false);

            Yii::$app->getSession()->setFlash('success','Data Tersimpan');
            return $this->redirect(['view', 'id' => $model->id_wisata]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Wisata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Wisata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Wisata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wisata::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
