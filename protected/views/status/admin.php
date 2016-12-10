<?php
$this->breadcrumbs=array(
	'Status'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);

?>

<h1>Manage Status</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'status-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'status_id',
		'status_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
