<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasjidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masjids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masjid-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Masjid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_masjid',
            'nama_masjid',
            'alamat',
            'kelurahan',
            'kecamatan',
            //'latitude',
            //'longitude',
            //'foto',
            //'informasi',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
