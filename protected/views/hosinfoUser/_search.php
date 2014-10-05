<?php
/* @var $this HosinfoUserController */
/* @var $model HosinfoUser */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcard'); ?>
		<?php echo $form->textField($model,'idcard',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hn'); ?>
		<?php echo $form->textField($model,'hn',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emptype'); ?>
		<?php echo $form->textField($model,'emptype',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activate'); ?>
		<?php echo $form->textField($model,'activate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'submitcount'); ?>
		<?php echo $form->textField($model,'submitcount',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department'); ?>
		<?php echo $form->textField($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startdate'); ?>
		<?php echo $form->textField($model,'startdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birthdate'); ?>
		<?php echo $form->textField($model,'birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_gov_officer'); ?>
		<?php echo $form->textField($model,'start_gov_officer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_status'); ?>
		<?php echo $form->textField($model,'emp_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_group'); ?>
		<?php echo $form->textField($model,'dep_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedby'); ?>
		<?php echo $form->textField($model,'updatedby',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastupdated'); ?>
		<?php echo $form->textField($model,'lastupdated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resign'); ?>
		<?php echo $form->textField($model,'resign'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resigndate'); ?>
		<?php echo $form->textField($model,'resigndate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'access_carbooking'); ?>
		<?php echo $form->textField($model,'access_carbooking',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'access_carbooking_permission'); ?>
		<?php echo $form->textField($model,'access_carbooking_permission'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addrpart'); ?>
		<?php echo $form->textField($model,'addrpart',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'moopart'); ?>
		<?php echo $form->textField($model,'moopart',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tmbpart'); ?>
		<?php echo $form->textField($model,'tmbpart',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amppart'); ?>
		<?php echo $form->textField($model,'amppart',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chwpart'); ?>
		<?php echo $form->textField($model,'chwpart',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'road'); ?>
		<?php echo $form->textField($model,'road',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'po_code'); ?>
		<?php echo $form->textField($model,'po_code',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'father_name'); ?>
		<?php echo $form->textField($model,'father_name',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'father_cid'); ?>
		<?php echo $form->textField($model,'father_cid',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mother_name'); ?>
		<?php echo $form->textField($model,'mother_name',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mother_cid'); ?>
		<?php echo $form->textField($model,'mother_cid',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'married_name'); ?>
		<?php echo $form->textField($model,'married_name',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'married_cid'); ?>
		<?php echo $form->textField($model,'married_cid',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'education_remark'); ?>
		<?php echo $form->textField($model,'education_remark',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'education'); ?>
		<?php echo $form->textField($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary'); ?>
		<?php echo $form->textField($model,'salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rank'); ?>
		<?php echo $form->textField($model,'rank'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gov_no'); ?>
		<?php echo $form->textField($model,'gov_no',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_no'); ?>
		<?php echo $form->textField($model,'emp_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emp_image'); ?>
		<?php echo $form->textField($model,'emp_image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->