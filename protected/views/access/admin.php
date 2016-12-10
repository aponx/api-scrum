<?php
$this->breadcrumbs=array(
	'Access'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);

?>

<h1>Manage Accesses</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'access-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'access_id',
		'access_url',
		'access_action',
		'access_method',
		'access_param',
		'access_active',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
