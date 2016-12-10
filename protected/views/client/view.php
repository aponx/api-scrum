<?php
/* @var $this ClientController */
/* @var $model Client */

$this->breadcrumbs=array(
	'Client'=>array('admin'),
	$model->client_id,
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Update', 'url'=>array('update', 'id'=>$model->client_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>View Client</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'client_id',
		'client_email',
		'client_password',
		'client_name',
		'client_address',
		'client_phone',
		'client_active',
	),
)); ?>
