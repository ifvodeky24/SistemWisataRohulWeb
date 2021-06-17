<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = 'Perbarui Data Wisata: ' . $model->id_wisata;
$this->params['breadcrumbs'][] = ['label' => 'Data Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wisata, 'url' => ['view', 'id' => $model->id_wisata]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="wisata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
