<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Spbu */

$this->title = 'Perbarui Data SPBU: ' . $model->id_spbu;
$this->params['breadcrumbs'][] = ['label' => 'Data SPBU', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_spbu, 'url' => ['view', 'id' => $model->id_spbu]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="spbu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
