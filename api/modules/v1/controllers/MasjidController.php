<?php

namespace app\api\modules\v1\controllers;

use Yii;
use app\models\Masjid;
use yii\rest\Controller;
use yii\web\Response;

class MasjidController extends Controller
{
    public function actionById($id_masjid)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_masjid 
            WHERE tb_masjid.id_masjid = '$id_masjid'";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }

    public function actionGetAll()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $response = null;

        if (Yii::$app->request->isGet) {

            $sql = "SELECT * FROM tb_masjid";

            $response['data'] = Yii::$app->db->createCommand($sql)->queryAll();
        }

        return $response;
    }
}
