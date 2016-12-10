<?php
/* @var $this TokenController */
/* @var $model Token */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'token-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'token_source'); ?>
		<?php 
		$source = Source::model()->findAll();
		$listsouce = CHtml::listData($source, 
                'source_id', 'source_name');
		echo $form->dropDownList($model,'token_source', $listsouce, array('prompt'=>'Pilih Source'));
		?>
		<?php echo $form->error($model,'token_source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'token_client_id'); ?>
		<?php 
		$clients = Client::model()->findAll("client_active = 1");
		$listclient = CHtml::listData($clients, 
                'client_id', 'client_name');
		echo $form->dropDownList($model,'token_client_id', $listclient, array('prompt'=>'Pilih Client'));
		?>
		<?php echo $form->error($model,'token_client_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->