<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penginapan */

$this->title = 'Perbarui Data Penginapan: ' . $model->id_penginapan;
$this->params['breadcrumbs'][] = ['label' => 'Data Penginapan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penginapan, 'url' => ['view', 'id' => $model->id_penginapan]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="penginapan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
