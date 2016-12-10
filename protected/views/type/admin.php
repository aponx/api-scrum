<?php
$this->breadcrumbs=array(
	'Type'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);

?>

<h1>Manage Type</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'type_id',
		'type_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
