<?php
/* @var $this SourceController */
/* @var $model Source */

$this->breadcrumbs=array(
	'Source'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->source_id)),
);
?>

<h1>Update Source</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>