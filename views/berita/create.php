<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Berita */

$this->title = 'Tambah Data Berita';
$this->params['breadcrumbs'][] = ['label' => 'Data Berita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
