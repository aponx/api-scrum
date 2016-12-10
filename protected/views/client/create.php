<?php
/* @var $this ClientController */
/* @var $model Client */

$this->breadcrumbs=array(
	'Client'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Client</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>