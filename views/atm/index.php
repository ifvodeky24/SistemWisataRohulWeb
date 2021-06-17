<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AtmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data ATM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atm-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data ATM', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_atm',
            'nama_atm',
            'alamat',
            'kelurahan',
            'kecamatan',
            //'latitude',
            //'longitude',
            //'informasi',
            //'createdAt',
            //'updatedAt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
