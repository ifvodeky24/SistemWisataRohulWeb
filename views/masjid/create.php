<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Masjid */

$this->title = 'Create Masjid';
$this->params['breadcrumbs'][] = ['label' => 'Masjids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masjid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
