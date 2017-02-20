<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<meta name="google-site-verification" content="h__Xmy3f3iI0hcuaaBq3hCtktl592WIdyO5pDo_SNJs" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Country', 'url'=>array('/country/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Position', 'url'=>array('/position/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Priority', 'url'=>array('/priority/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Status', 'url'=>array('/status/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Type', 'url'=>array('/type/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Source', 'url'=>array('/source/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Client', 'url'=>array('/client/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Token', 'url'=>array('/token/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'API Access', 'url'=>array('/access/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'API Auth', 'url'=>array('/groupauth/admin'), 'visible'=>Yii::app()->user->isAdmin()),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>Yii::app()->user->isAdmin())
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
