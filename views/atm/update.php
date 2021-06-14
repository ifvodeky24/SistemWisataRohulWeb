<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atm */

$this->title = 'Update Atm: ' . $model->id_atm;
$this->params['breadcrumbs'][] = ['label' => 'Atms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_atm, 'url' => ['view', 'id' => $model->id_atm]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
