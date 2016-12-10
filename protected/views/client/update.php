<?php
/* @var $this ClientController */
/* @var $model Client */

$this->breadcrumbs=array(
	'Client'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->client_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Update Client</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>