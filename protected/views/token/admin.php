<?php
/* @var $this TokenController */
/* @var $model Token */

$this->breadcrumbs=array(
	'Token'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Token', 'url'=>array('create')),
);

?>

<h1>Manage Token</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'token-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'token_id',
		'token_source',
		'token_client_id',
		'token_key',
		'token_create_date',
		'token_user_create',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
