<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Penginapan;
use yii\rest\Controller;
use yii\web\Response;

class PenginapanController extends Controller
{
    public function actionById($id_penginapan)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_penginapan 
            WHERE tb_penginapan.id_penginapan = '$id_penginapan'";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_penginapan";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }
}
