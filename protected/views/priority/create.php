<?php
/* @var $this PriorityController */
/* @var $model Priority */

$this->breadcrumbs=array(
	'Priority'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Priority</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>