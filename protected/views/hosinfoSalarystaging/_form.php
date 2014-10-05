<?php
/* @var $this HosinfoSalarystagingController */
/* @var $model HosinfoSalarystaging */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hosinfo-salarystaging-form',
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
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employeetype'); ?>
		<?php echo $form->textField($model,'employeetype',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'employeetype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary'); ?>
		<?php echo $form->textField($model,'salary',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'controlid'); ?>
		<?php echo $form->textField($model,'controlid',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'controlid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'positionsalary'); ?>
		<?php echo $form->textField($model,'positionsalary',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'positionsalary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tobtan'); ?>
		<?php echo $form->textField($model,'tobtan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tobtan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vat'); ?>
		<?php echo $form->textField($model,'vat',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'vat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chorkorsor'); ?>
		<?php echo $form->textField($model,'chorkorsor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'chorkorsor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chorkorsorjorwar'); ?>
		<?php echo $form->textField($model,'chorkorsorjorwar',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'chorkorsorjorwar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chorkorsorkracoung'); ?>
		<?php echo $form->textField($model,'chorkorsorkracoung',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'chorkorsorkracoung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'korborkhor'); ?>
		<?php echo $form->textField($model,'korborkhor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'korborkhor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'korsorjaw'); ?>
		<?php echo $form->textField($model,'korsorjaw',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'korsorjaw'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sahakorn'); ?>
		<?php echo $form->textField($model,'sahakorn',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sahakorn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oomsin'); ?>
		<?php echo $form->textField($model,'oomsin',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'oomsin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aia'); ?>
		<?php echo $form->textField($model,'aia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'aia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store'); ?>
		<?php echo $form->textField($model,'store',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'store'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'erictric'); ?>
		<?php echo $form->textField($model,'erictric',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'erictric'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aia123'); ?>
		<?php echo $form->textField($model,'aia123',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'aia123'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'torousor'); ?>
		<?php echo $form->textField($model,'torousor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'torousor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oceanlifeinsurance'); ?>
		<?php echo $form->textField($model,'oceanlifeinsurance',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'oceanlifeinsurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalamount'); ?>
		<?php echo $form->textField($model,'totalamount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'totalamount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portorsorbudget'); ?>
		<?php echo $form->textField($model,'portorsorbudget',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'portorsorbudget'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portorsorbumrung'); ?>
		<?php echo $form->textField($model,'portorsorbumrung',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'portorsorbumrung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nothaveclinic'); ?>
		<?php echo $form->textField($model,'nothaveclinic',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nothaveclinic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doctorpostpaid'); ?>
		<?php echo $form->textField($model,'doctorpostpaid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'doctorpostpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'karraksapayaban'); ?>
		<?php echo $form->textField($model,'karraksapayaban',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'karraksapayaban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'childeducationbudget'); ?>
		<?php echo $form->textField($model,'childeducationbudget',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'childeducationbudget'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonusghorepormore'); ?>
		<?php echo $form->textField($model,'bonusghorepormore',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'bonusghorepormore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tokburgother'); ?>
		<?php echo $form->textField($model,'tokburgother',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tokburgother'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other2'); ?>
		<?php echo $form->textField($model,'other2',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'other2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other3'); ?>
		<?php echo $form->textField($model,'other3',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'other3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ot'); ?>
		<?php echo $form->textField($model,'ot',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moneytemkhan'); ?>
		<?php echo $form->textField($model,'moneytemkhan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'moneytemkhan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kharwichachive'); ?>
		<?php echo $form->textField($model,'kharwichachive',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kharwichachive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kharklongchive'); ?>
		<?php echo $form->textField($model,'kharklongchive',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kharklongchive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tokburg'); ?>
		<?php echo $form->textField($model,'tokburg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tokburg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'socialinsure'); ?>
		<?php echo $form->textField($model,'socialinsure',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'socialinsure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gorsorjaw'); ?>
		<?php echo $form->textField($model,'gorsorjaw',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'gorsorjaw'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sorsorjaw'); ?>
		<?php echo $form->textField($model,'sorsorjaw',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sorsorjaw'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aia2'); ?>
		<?php echo $form->textField($model,'aia2',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'aia2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aia3'); ?>
		<?php echo $form->textField($model,'aia3',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'aia3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'library'); ?>
		<?php echo $form->textField($model,'library',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'library'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'positionname'); ?>
		<?php echo $form->textField($model,'positionname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'positionname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salarymonth'); ?>
		<?php echo $form->textField($model,'salarymonth',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'salarymonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lifeinsure'); ?>
		<?php echo $form->textField($model,'lifeinsure',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'lifeinsure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus'); ?>
		<?php echo $form->textField($model,'bonus',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'bonus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ghbbank'); ?>
		<?php echo $form->textField($model,'ghbbank',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ghbbank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oomsinjor'); ?>
		<?php echo $form->textField($model,'oomsinjor',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'oomsinjor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'korborkhortokburg'); ?>
		<?php echo $form->textField($model,'korborkhortokburg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'korborkhortokburg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'korsorjawtokburg'); ?>
		<?php echo $form->textField($model,'korsorjawtokburg',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'korsorjawtokburg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receiveother'); ?>
		<?php echo $form->textField($model,'receiveother',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'receiveother'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dedugother'); ?>
		<?php echo $form->textField($model,'dedugother',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dedugother'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->