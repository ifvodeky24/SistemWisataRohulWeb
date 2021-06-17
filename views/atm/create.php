<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atm */

$this->title = 'Tambah Data ATM';
$this->params['breadcrumbs'][] = ['label' => 'Data ATM', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
