<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Wisata;
use yii\rest\Controller;
use yii\web\Response;

class WisataController extends Controller
{
    public function actionById($id_wisata)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_wisata 
            WHERE tb_wisata.id_wisata = '$id_wisata'";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_wisata";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }
}
