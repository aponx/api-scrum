<?php
$this->breadcrumbs=array(
	'Priority'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
	array('label'=>'Create', 'url'=>array('create')),
);
?>

<h1>Update Priority</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>