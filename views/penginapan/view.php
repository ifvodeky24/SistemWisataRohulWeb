<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penginapan */

$this->title = $model->id_penginapan;
$this->params['breadcrumbs'][] = ['label' => 'Data Penginapan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penginapan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id_penginapan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_penginapan], [
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
            'id_penginapan',
            'nama_penginapan',
            'alamat',
            'pemilik',
            'latitude',
            'longitude',
            'foto',
            'informasi',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
