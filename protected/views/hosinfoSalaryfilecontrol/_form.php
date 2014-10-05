<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $model HosinfoSalaryfilecontrol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hosinfo-salaryfilecontrol-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'excelfile'); ?>
		<?php echo $form->textArea($model,'excelfile',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'excelfile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploaddatetime'); ?>
		<?php echo $form->textField($model,'uploaddatetime'); ?>
		<?php echo $form->error($model,'uploaddatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userlogin'); ?>
		<?php echo $form->textField($model,'userlogin',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'userlogin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploadmonth'); ?>
		<?php echo $form->textField($model,'uploadmonth',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'uploadmonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalrecord'); ?>
		<?php echo $form->textField($model,'totalrecord'); ?>
		<?php echo $form->error($model,'totalrecord'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->