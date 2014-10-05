<?php
/* @var $this HosinfoSalaryOtStaggingController */
/* @var $model HosinfoSalaryOtStagging */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hosinfo-salary-ot-stagging-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'controlid'); ?>
		<?php echo $form->textField($model,'controlid'); ?>
		<?php echo $form->error($model,'controlid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officename'); ?>
		<?php echo $form->textField($model,'officename',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'officename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'positoin'); ?>
		<?php echo $form->textField($model,'positoin',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'positoin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot'); ?>
		<?php echo $form->textField($model,'ot',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_refer'); ?>
		<?php echo $form->textField($model,'ot_refer',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_refer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_noonandnight'); ?>
		<?php echo $form->textField($model,'ot_noonandnight',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_noonandnight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_or'); ?>
		<?php echo $form->textField($model,'ot_or',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_or'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_healthpromotion'); ?>
		<?php echo $form->textField($model,'ot_healthpromotion',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_healthpromotion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_ems'); ?>
		<?php echo $form->textField($model,'ot_ems',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_ems'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_workload'); ?>
		<?php echo $form->textField($model,'ot_workload',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_workload'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_perhour'); ?>
		<?php echo $form->textField($model,'ot_perhour',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_perhour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_stanby'); ?>
		<?php echo $form->textField($model,'ot_stanby',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_stanby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_doctor_service'); ?>
		<?php echo $form->textField($model,'ot_doctor_service',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_doctor_service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot_dental_service'); ?>
		<?php echo $form->textField($model,'ot_dental_service',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ot_dental_service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salarymonth'); ?>
		<?php echo $form->textField($model,'salarymonth',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'salarymonth'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->