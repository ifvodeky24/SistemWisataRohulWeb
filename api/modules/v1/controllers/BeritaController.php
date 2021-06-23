<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Berita;
use yii\rest\Controller;
use yii\web\Response;

class BeritaController extends Controller
{
    public function actionById($id_berita)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_berita 
            WHERE tb_berita.id_berita = '$id_berita'";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_berita";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }
}
