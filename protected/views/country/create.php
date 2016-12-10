<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs=array(
	'Country'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Country</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>