<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Travel */

$this->title = 'Perbarui Data Travel: ' . $model->id_travel;
$this->params['breadcrumbs'][] = ['label' => 'Data Travel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_travel, 'url' => ['view', 'id' => $model->id_travel]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="travel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
