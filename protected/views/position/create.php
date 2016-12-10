<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs=array(
	'Position'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Position</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>