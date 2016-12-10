<?php
/* @var $this GroupauthController */
/* @var $model Groupauth */

$this->breadcrumbs=array(
	'Groupauth'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);

?>

<h1>Manage Groupauths</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'groupauth-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'groupauth_id',
		'groupauth_token_id',
		'groupauth_access_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
