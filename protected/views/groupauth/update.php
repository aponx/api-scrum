<?php
/* @var $this GroupauthController */
/* @var $model Groupauth */

$this->breadcrumbs=array(
	'Groupauth'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->groupauth_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Update Groupauth</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>