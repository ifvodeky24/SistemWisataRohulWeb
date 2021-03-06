<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Berita */

$this->title = 'Perbarui Data Berita: ' . $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Data Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_berita, 'url' => ['view', 'id' => $model->id_berita]];
$this->params['breadcrumbs'][] = 'Perbarui';
?>
<div class="berita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
