<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $model HosinfoSalaryfilecontrol */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'controlid'); ?>
		<?php echo $form->textField($model,'controlid',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excelfile'); ?>
		<?php echo $form->textArea($model,'excelfile',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uploaddatetime'); ?>
		<?php echo $form->textField($model,'uploaddatetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userlogin'); ?>
		<?php echo $form->textField($model,'userlogin',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uploadmonth'); ?>
		<?php echo $form->textField($model,'uploadmonth',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalrecord'); ?>
		<?php echo $form->textField($model,'totalrecord'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->