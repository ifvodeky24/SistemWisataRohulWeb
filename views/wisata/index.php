<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WisataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Wisata';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Wisata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_wisata',
            'nama_wisata',
            'kategori',
            'alamat',
            'kelurahan',
            //'kecamatan',
            'foto',
            //'latitude',
            //'longitude',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
