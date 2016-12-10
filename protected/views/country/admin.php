<?php
$this->breadcrumbs=array(
	'Country'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);
?>

<h1>Manage Country</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'country-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'country_id',
		'country_name',
		'country_code',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
