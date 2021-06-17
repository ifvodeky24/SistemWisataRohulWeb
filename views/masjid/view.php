<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Masjid */

$this->title = $model->id_masjid;
$this->params['breadcrumbs'][] = ['label' => 'Data Masjid', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="masjid-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id_masjid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_masjid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_masjid',
            'nama_masjid',
            'alamat',
            'kelurahan',
            'kecamatan',
            'latitude',
            'longitude',
            'foto',
            'informasi',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
