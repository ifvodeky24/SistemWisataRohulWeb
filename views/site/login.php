<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <?php $form = Activeform::begin(['id' => 'login-form']); ?>
            <div class="login-box-body">
                <div class="login-logo">
                    <a href='#'><b>Sistem<br> </b> Wisata Rohul</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body login-card-body">
                    <div class="text-center">
                                <i><h5 class="text">Silahkan login terlebih 
                                dahulu</h5></i>
                                <br>
                    </div>

                    <form action="../../index2.html" method="post">
                        <div class="form-group has-feedback">
                            <?=$form
                                    ->field($model, 'username')
                                    ->textInput(['placeholder' => $model->
                                      getAttributeLabel('username')])
                                    ->label(false) ?>
                        <span class="glyphhicon glypicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                         <?= $form
                                    ->field($model, 'password')
                                    ->passwordInput(['placeholder' => $model->
                                      getAttributeLabel('password')])
                                    ->label(false) ?>

                            <span class="glyphhicon glyphhicon-lock form-control-feedback
                            "></span>
                        </div>

                        <div class="social-auth-links text-center mb-3">
                            <?= Html::submitButton('Login', ['class'=>['
                                btn btn-success'],
                                'name' => 'login']) ?>
                        </div>
                    </form>
                </div>
            </div>

            

            <div class="logo text-center">
                <br>
            <p> <b>&copy;Wisata Rohul<br> <?=date ('Y') ?></b></p>

        </div>

    </div>
<?php ActiveForm::end(); ?>
</div>
