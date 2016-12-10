<?php
/* @var $this GroupauthController */
/* @var $model Groupauth */

$this->breadcrumbs=array(
	'Groupauth'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Groupauth</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>