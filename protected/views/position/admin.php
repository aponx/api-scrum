<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs=array(
	'Position'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);

?>

<h1>Manage Position</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'position-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'position_id',
		'position_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
