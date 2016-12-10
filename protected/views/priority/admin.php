<?php
$this->breadcrumbs=array(
	'Priority'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);

?>

<h1>Manage Priority</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'priority-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'priority_id',
		'priority_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
