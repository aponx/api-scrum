<?php
/* @var $this AccessController */
/* @var $model Access */

$this->breadcrumbs=array(
	'Accesses'=>array('admin'),
	$model->access_id,
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Update', 'url'=>array('update', 'id'=>$model->access_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>View Access</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'access_id',
		'access_url',
		'access_action',
		'access_method',
		'access_param',
		'access_active',
	),
)); ?>
