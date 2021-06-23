<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Spbu;
use yii\rest\Controller;
use yii\web\Response;

class SpbuController extends Controller
{
    public function actionById($id_spbu)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_penginapan 
            WHERE tb_spbu.id_spbu = '$id_spbu'";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_spbu";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }
}
