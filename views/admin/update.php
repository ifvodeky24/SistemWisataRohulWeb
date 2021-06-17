<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */

$this->title = 'Perbarui Data Admin: ' . $model->id_admin;
$this->params['breadcrumbs'][] = ['label' => 'Data Admin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_admin, 'url' => ['view', 'id' => $model->id_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
