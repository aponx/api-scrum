<?php
/* @var $this ClientController */
/* @var $model Client */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'client_email'); ?>
		<?php echo $form->textField($model,'client_email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'client_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_password'); ?>
		<?php echo $form->passwordField($model,'client_password',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'client_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_name'); ?>
		<?php echo $form->textField($model,'client_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'client_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_address'); ?>
		<?php echo $form->textArea($model,'client_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'client_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_phone'); ?>
		<?php echo $form->textField($model,'client_phone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_active'); ?>
		<?php 
		$actives = array('1' => 'Aktif', 
						 '0' => 'Tidak Aktif',  
						);
		echo $form->dropDownList($model,'client_active', $actives);
		?>
		<?php echo $form->error($model,'client_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->