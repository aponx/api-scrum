<?php
/* @var $this GroupauthController */
/* @var $model Groupauth */

$this->breadcrumbs=array(
	'Groupauth'=>array('admin'),
	$model->groupauth_id,
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Update', 'url'=>array('update', 'id'=>$model->groupauth_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>View Groupauth</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'groupauth_id',
		'groupauth_token_id',
		'groupauth_access_id',
	),
)); ?>
