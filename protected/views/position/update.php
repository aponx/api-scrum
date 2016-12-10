<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs=array(
	'Position'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
	array('label'=>'Create', 'url'=>array('create')),
);
?>

<h1>Update Position</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>