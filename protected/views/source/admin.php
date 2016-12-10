<?php
/* @var $this SourceController */
/* @var $model Source */

$this->breadcrumbs=array(
	'Source'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create', 'url'=>array('create')),
);

?>

<h1>Manage Sources</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'source-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'source_id',
		'source_name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
