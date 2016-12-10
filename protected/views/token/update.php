<?php
/* @var $this TokenController */
/* @var $model Token */

$this->breadcrumbs=array(
	'Token'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
	array('label'=>'View', 'url'=>array('view', 'id'=>$model->token_id)),
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Update Token</h1>

<?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>