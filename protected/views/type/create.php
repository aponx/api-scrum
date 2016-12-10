<?php
$this->breadcrumbs=array(
	'Type'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('admin')),
);
?>

<h1>Create Type</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>