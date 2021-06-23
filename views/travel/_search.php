<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TravelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_travel') ?>

    <?= $form->field($model, 'nama_travel') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'kelurahan') ?>

    <?= $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'informasi') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <?php // echo $form->field($model, 'updatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
