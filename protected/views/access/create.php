<?php
/* @var $this AccessController */
/* @var $model Access */

$this->breadcrumbs=array(
	'Access'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Access</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>