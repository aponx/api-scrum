<?php
$this->breadcrumbs=array(
	'Status'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Status</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>