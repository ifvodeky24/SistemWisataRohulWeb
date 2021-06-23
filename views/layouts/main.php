<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;

$username = Yii::$app->user->identity->username;
$id_admin = Yii::$app->user->identity->id_admin;
$foto = Yii::$app->user->identity->foto;
$nama_lengkap = Yii::$app->user->identity->nama_lengkap;
User::find()
    ->where(['id_admin' => $id_admin])
    ->one();

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Wisata Rohul</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <?php $this->head() ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php $this->beginBody() ?>

    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <?= 
              Html::img('@web/files/images/logo.png', ['class' => 'animation__shake', 'alt' => 'Logo', 'height' => 60 , 'width' => 60])
        ?>
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= Yii::$app->request->baseUrl; ?>/site" class="nav-link">Beranda</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

          <li class="nav-item">
            <div class="pull-right">
                <?php echo Html::a('Logout', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']) ?>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= Yii::$app->request->baseUrl; ?>/site" class="brand-link">
          <?= 
              Html::img('@web/files/images/logo.png', ['class' => 'brand-image img-circle elevation-3', 'alt' => 'Logo'])
          ?>

          <span class="brand-text font-weight-light">Wisata Rohul</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <?= empty($user->foto) ?
                  Html::img('@web/files/images/admin_images/' . $foto, ['class' => 'img-circle elevation-2', 'alt' => 'User Image']) :

                  Html::img(\Yii::$app->params['frontendUrl'] . $user->foto, ['class' => 'img-circle elevation-2', 'alt' => 'User Image']) 
              ?>
            </div>
            <div class="info">
              <a href="#" class="d-block"><?php echo $nama_lengkap; ?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              
              <li class="nav-header">MENU</li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/site" class="nav-link">
                  <i class="nav-icon fa fa-home"></i>
                  <p>
                    Beranda
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/masjid" class="nav-link">
                  <i class="nav-icon fa fa-bars"></i>
                  <p>
                    Data Masjid
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/wisata" class="nav-link">
                  <i class="nav-icon fa fa-briefcase"></i>
                  <p>
                    Data Wisata
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/event" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Data Event
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/atm" class="nav-link">
                  <i class="nav-icon fa fa-university"></i>
                  <p>
                    Data ATM
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/penginapan" class="nav-link">
                  <i class="nav-icon fa fa-bed"></i>
                  <p>
                    Data Penginapan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/spbu" class="nav-link">
                  <i class="nav-icon fa fa-fire"></i>
                  <p>
                    Data SPBU
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/travel" class="nav-link">
                  <i class="nav-icon fa fa-car"></i>
                  <p>
                    Data Travel
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/berita" class="nav-link">
                  <i class="nav-icon fa fa-newspaper"></i>
                  <p>
                    Data Berita
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo Yii::$app->request->baseUrl; ?>/admin" class="nav-link">
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Data Admin
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Control panel</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                  <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                </ol>
              </div>
            </div>
          </div>
        </div>
        

        <section class="content">
          <div class="container-fluid">
           
            <?php echo $content; ?>
          
          </div>
        </section>

      </div>

      <footer class="main-footer">
        <strong>Copyright &copy; <?php echo date('Y') ?> <a href="#">Wisata Rokan Hulu</a>.</strong>
        All rights reserved.
        
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
