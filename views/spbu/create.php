<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Spbu */

$this->title = 'Tambah Data SPBU';
$this->params['breadcrumbs'][] = ['label' => 'Data SPBU', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spbu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
