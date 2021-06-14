<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Masjid */

$this->title = 'Update Masjid: ' . $model->id_masjid;
$this->params['breadcrumbs'][] = ['label' => 'Masjids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_masjid, 'url' => ['view', 'id' => $model->id_masjid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="masjid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
