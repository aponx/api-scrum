<?php
/* @var $this TokenController */
/* @var $model Token */

$this->breadcrumbs=array(
	'Tokens'=>array('admin'),
	$model->token_id,
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Update', 'url'=>array('update', 'id'=>$model->token_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>View Token</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'token_id',
		'token_source',
		'token_client_id',
		'token_key',
		'token_create_date',
		'token_user_create',
	),
)); ?>
