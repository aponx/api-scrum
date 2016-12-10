<?php
/* @var $this SourceController */
/* @var $model Source */

$this->breadcrumbs=array(
	'Source'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Source</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>