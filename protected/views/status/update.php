<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Status'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
	array('label'=>'Create', 'url'=>array('create')),
);
?>

<h1>Update Status</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>