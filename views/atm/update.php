<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atm */

$this->title = 'Perbarui Data ATM: ' . $model->id_atm;
$this->params['breadcrumbs'][] = ['label' => 'Data ATM', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_atm, 'url' => ['view', 'id' => $model->id_atm]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="atm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
