<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Travel;
use yii\rest\Controller;
use yii\web\Response;

class TravelController extends Controller
{
    public function actionById($id_travel)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_travel 
            WHERE tb_travel.id_travel = '$id_travel'";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_travel";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }
}
