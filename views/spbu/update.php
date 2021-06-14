<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Spbu */

$this->title = 'Update Spbu: ' . $model->id_spbu;
$this->params['breadcrumbs'][] = ['label' => 'Spbus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_spbu, 'url' => ['view', 'id' => $model->id_spbu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spbu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
