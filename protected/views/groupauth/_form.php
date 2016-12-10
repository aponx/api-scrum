<?php
/* @var $this GroupauthController */
/* @var $model Groupauth */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupauth-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'groupauth_token_id'); ?>
		<?php 
		$tokens = Token::model()->findAll();
		$listtoken = CHtml::listData($tokens, 
                'token_id', 'token_client_id');
		echo $form->dropDownList($model,'groupauth_token_id', $listtoken, array('prompt'=>'Pilih Token'));
		?>
		<?php echo $form->error($model,'groupauth_token_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groupauth_access_id'); ?>
		<?php 
		$access = Access::model()->findAll("access_active = 1");
		$listaccess = CHtml::listData($access, 
                'access_id', 'access_action');
		echo $form->dropDownList($model,'groupauth_access_id', $listaccess, array('prompt'=>'Pilih Access'));
		?>
		<?php echo $form->error($model,'groupauth_access_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->