<?php
/* @var $this ClientController */
/* @var $model Client */

$this->breadcrumbs=array(
	'Client'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);
?>

<h1>Manage Clients</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'client_id',
		'client_email',
		'client_password',
		'client_name',
		'client_address',
		'client_phone',
		/*
		'client_active',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
