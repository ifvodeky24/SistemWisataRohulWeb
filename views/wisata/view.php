<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = $model->id_wisata;
$this->params['breadcrumbs'][] = ['label' => 'Data Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wisata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id_wisata], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_wisata], [
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
            'id_wisata',
            'nama_wisata',
            'kategori',
            'alamat',
            'kelurahan',
            'kecamatan',
            'foto',
            'latitude',
            'longitude',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
