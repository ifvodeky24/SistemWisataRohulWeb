<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Atm;
use yii\rest\Controller;
use yii\web\Response;

class AtmController extends Controller
{
    public function actionById($id_atm)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_atm 
            WHERE tb_atm.id_atm = '$id_atm'";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_atm";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }
}
