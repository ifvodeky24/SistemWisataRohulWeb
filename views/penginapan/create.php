<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penginapan */

$this->title = 'Tambah Data Penginapan';
$this->params['breadcrumbs'][] = ['label' => 'Data Penginapan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penginapan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
