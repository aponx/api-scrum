<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs=array(
	'Country'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
	array('label'=>'Create', 'url'=>array('create')),
);
?>

<h1>Update Country</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>