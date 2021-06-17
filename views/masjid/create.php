<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Masjid */

$this->title = 'Tambah Data Masjid';
$this->params['breadcrumbs'][] = ['label' => 'Data Masjid', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masjid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
