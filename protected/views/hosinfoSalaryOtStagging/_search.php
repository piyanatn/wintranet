<?php
/* @var $this HosinfoSalaryOtStaggingController */
/* @var $model HosinfoSalaryOtStagging */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'staging_id'); ?>
		<?php echo $form->textField($model,'staging_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'controlid'); ?>
		<?php echo $form->textField($model,'controlid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cid'); ?>
		<?php echo $form->textField($model,'cid',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officename'); ?>
		<?php echo $form->textField($model,'officename',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'positoin'); ?>
		<?php echo $form->textField($model,'positoin',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot'); ?>
		<?php echo $form->textField($model,'ot',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_refer'); ?>
		<?php echo $form->textField($model,'ot_refer',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_noonandnight'); ?>
		<?php echo $form->textField($model,'ot_noonandnight',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_or'); ?>
		<?php echo $form->textField($model,'ot_or',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_healthpromotion'); ?>
		<?php echo $form->textField($model,'ot_healthpromotion',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_ems'); ?>
		<?php echo $form->textField($model,'ot_ems',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_workload'); ?>
		<?php echo $form->textField($model,'ot_workload',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_perhour'); ?>
		<?php echo $form->textField($model,'ot_perhour',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_stanby'); ?>
		<?php echo $form->textField($model,'ot_stanby',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_doctor_service'); ?>
		<?php echo $form->textField($model,'ot_doctor_service',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot_dental_service'); ?>
		<?php echo $form->textField($model,'ot_dental_service',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salarymonth'); ?>
		<?php echo $form->textField($model,'salarymonth',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->