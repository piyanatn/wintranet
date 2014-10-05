<?php
/* @var $this HosinfoUserController */
/* @var $model HosinfoUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hosinfo-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idcard'); ?>
		<?php echo $form->textField($model,'idcard',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'idcard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hn'); ?>
		<?php echo $form->textField($model,'hn',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'hn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emptype'); ?>
		<?php echo $form->textField($model,'emptype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emptype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activate'); ?>
		<?php echo $form->textField($model,'activate'); ?>
		<?php echo $form->error($model,'activate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'submitcount'); ?>
		<?php echo $form->textField($model,'submitcount',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'submitcount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department'); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startdate'); ?>
		<?php echo $form->textField($model,'startdate'); ?>
		<?php echo $form->error($model,'startdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birtdate'); ?>
		<?php echo $form->textField($model,'birtdate'); ?>
		<?php echo $form->error($model,'birtdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_gov_officer'); ?>
		<?php echo $form->textField($model,'start_gov_officer'); ?>
		<?php echo $form->error($model,'start_gov_officer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_status'); ?>
		<?php echo $form->textField($model,'emp_status'); ?>
		<?php echo $form->error($model,'emp_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_group'); ?>
		<?php echo $form->textField($model,'dep_group'); ?>
		<?php echo $form->error($model,'dep_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedby'); ?>
		<?php echo $form->textField($model,'updatedby',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'updatedby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastupdated'); ?>
		<?php echo $form->textField($model,'lastupdated'); ?>
		<?php echo $form->error($model,'lastupdated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resign'); ?>
		<?php echo $form->textField($model,'resign'); ?>
		<?php echo $form->error($model,'resign'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resigndate'); ?>
		<?php echo $form->textField($model,'resigndate'); ?>
		<?php echo $form->error($model,'resigndate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'access_carbooking'); ?>
		<?php echo $form->textField($model,'access_carbooking',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'access_carbooking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'access_carbooking_permission'); ?>
		<?php echo $form->textField($model,'access_carbooking_permission'); ?>
		<?php echo $form->error($model,'access_carbooking_permission'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addrpart'); ?>
		<?php echo $form->textField($model,'addrpart',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addrpart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moopart'); ?>
		<?php echo $form->textField($model,'moopart',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'moopart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tmbpart'); ?>
		<?php echo $form->textField($model,'tmbpart',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tmbpart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amppart'); ?>
		<?php echo $form->textField($model,'amppart',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'amppart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chwpart'); ?>
		<?php echo $form->textField($model,'chwpart',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'chwpart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'road'); ?>
		<?php echo $form->textField($model,'road',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'road'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'po_code'); ?>
		<?php echo $form->textField($model,'po_code',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'po_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'father_name'); ?>
		<?php echo $form->textField($model,'father_name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'father_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'father_cid'); ?>
		<?php echo $form->textField($model,'father_cid',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'father_cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mother_name'); ?>
		<?php echo $form->textField($model,'mother_name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'mother_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mother_cid'); ?>
		<?php echo $form->textField($model,'mother_cid',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'mother_cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'married_name'); ?>
		<?php echo $form->textField($model,'married_name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'married_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'married_cid'); ?>
		<?php echo $form->textField($model,'married_cid',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'married_cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education_remark'); ?>
		<?php echo $form->textField($model,'education_remark',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'education_remark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education'); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary'); ?>
		<?php echo $form->textField($model,'salary'); ?>
		<?php echo $form->error($model,'salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rank'); ?>
		<?php echo $form->textField($model,'rank'); ?>
		<?php echo $form->error($model,'rank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gov_no'); ?>
		<?php echo $form->textField($model,'gov_no',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'gov_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_no'); ?>
		<?php echo $form->textField($model,'emp_no'); ?>
		<?php echo $form->error($model,'emp_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_image'); ?>
		<?php echo $form->textField($model,'emp_image'); ?>
		<?php echo $form->error($model,'emp_image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->