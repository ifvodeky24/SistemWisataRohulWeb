<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
	<head>
	  <meta charset="<?= Yii::$app->charset ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wisata Rohul</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	    <?= Html::csrfMetaTags() ?>
	    <?php $this->head() ?>
	</head>

	<body class="hold-transition login-page" background="<?= Yii::getAlias('@web') . '/files/images/background.jpg'
	?> ">	
		<?php $this->beginBody() ?>
		<!--mulai-->
		<div class="login-box">
			<?= $content?> 
		</div>
		<!--akhir-->
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>