<?php
/* @var $this AccessController */
/* @var $model Access */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'access-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'access_url'); ?>
		<?php echo $form->textField($model,'access_url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'access_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'access_action'); ?>
		<?php echo $form->textField($model,'access_action',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'access_action'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'access_method'); ?>
		<?php 
		$methods = array('POST' => 'POST', 
						 'GET' => 'GET',  
						);
		echo $form->dropDownList($model,'access_method', $methods, array('prompt'=>'Select Method'));
		?>
		<?php echo $form->error($model,'access_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'access_param'); ?>
		<?php 
		$params = array('1' => 'Ada', 
						 '0' => 'Tidak Ada',  
						);
		echo $form->dropDownList($model,'access_param', $params);
		?>
		<?php echo $form->error($model,'access_param'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'access_active'); ?>
		<?php 
		$actives = array('1' => 'Aktif', 
						 '0' => 'Tidak Aktif',  
						);
		echo $form->dropDownList($model,'access_active', $actives);
		?>
		<?php echo $form->error($model,'access_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->