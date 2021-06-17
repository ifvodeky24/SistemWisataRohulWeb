<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Masjid */

$this->title = 'Perbarui Data Masjid: ' . $model->id_masjid;
$this->params['breadcrumbs'][] = ['label' => 'Data Masjid', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_masjid, 'url' => ['view', 'id' => $model->id_masjid]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="masjid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
