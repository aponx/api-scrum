<?php
/* @var $this AccessController */
/* @var $model Access */

$this->breadcrumbs=array(
	'Accesses'=>array('admin'),
	'Update',
);

$this->menu=array(
	\array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->access_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Update Access</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>