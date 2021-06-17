<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Event */

$this->title = 'Perbarui Data Event: ' . $model->id_event;
$this->params['breadcrumbs'][] = ['label' => 'Data Event', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_event, 'url' => ['view', 'id' => $model->id_event]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="event-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
