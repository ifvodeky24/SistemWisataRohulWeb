<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SpbuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data SPBU';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spbu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data SPBU', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_spbu',
            'nama_spbu',
            'alamat',
            'kelurahan',
            'kecamatan',
            [
                'label'=>'foto',
                'format'=>'raw',
                'value' => function($data){
                    $url = Yii::$app->getHomeUrl(). "/files/images/spbu_images/" .$data['foto'];
                    return Html::img($url, ['alt'=>'Gambar Tidak Ada', 'class'=>'img-circle user-img',
                        'height'=>'100', 'width'=>'100', 'style'=>'object-fit: cover']);
                }
            ],
            //'latitude',
            //'longitude',
            //'informasi',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
