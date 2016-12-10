<?php
/* @var $this SourceController */
/* @var $model Source */

$this->breadcrumbs=array(
	'Source'=>array('admin'),
	$model->source_id,
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'Update', 'url'=>array('update', 'id'=>$model->source_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>View Source</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'source_id',
		'source_name',
	),
)); ?>
