<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */

$this->title = 'Tambah Data Wisata';
$this->params['breadcrumbs'][] = ['label' => 'Data Wisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
