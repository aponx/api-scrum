<?php
/* @var $this TokenController */
/* @var $model Token */

$this->breadcrumbs=array(
	'Token'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Token</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>