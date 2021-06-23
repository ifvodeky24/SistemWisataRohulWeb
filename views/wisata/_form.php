<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wisata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wisata-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'nama_wisata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori')->dropDownList([ 'Wisata Sejarah' => 'Wisata Sejarah', 'Wisata Kuliner' => 'Wisata Kuliner', 'Wisata Buatan' => 'Wisata Buatan', 'Wisata Alam' => 'Wisata Alam', 'Wisata Religi' => 'Wisata Religi', 'Wisata Budaya' => 'Wisata Budaya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <?= $form->field($model, 'informasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
