<?php
/* @var $this HosinfoSalarystagingController */
/* @var $model HosinfoSalarystaging */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'stagingid'); ?>
		<?php echo $form->textField($model,'stagingid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcard'); ?>
		<?php echo $form->textField($model,'idcard',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employeetype'); ?>
		<?php echo $form->textField($model,'employeetype',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary'); ?>
		<?php echo $form->textField($model,'salary',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'controlid'); ?>
		<?php echo $form->textField($model,'controlid',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'positionsalary'); ?>
		<?php echo $form->textField($model,'positionsalary',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tobtan'); ?>
		<?php echo $form->textField($model,'tobtan',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vat'); ?>
		<?php echo $form->textField($model,'vat',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chorkorsor'); ?>
		<?php echo $form->textField($model,'chorkorsor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chorkorsorjorwar'); ?>
		<?php echo $form->textField($model,'chorkorsorjorwar',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chorkorsorkracoung'); ?>
		<?php echo $form->textField($model,'chorkorsorkracoung',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'korborkhor'); ?>
		<?php echo $form->textField($model,'korborkhor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'korsorjaw'); ?>
		<?php echo $form->textField($model,'korsorjaw',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sahakorn'); ?>
		<?php echo $form->textField($model,'sahakorn',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oomsin'); ?>
		<?php echo $form->textField($model,'oomsin',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aia'); ?>
		<?php echo $form->textField($model,'aia',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store'); ?>
		<?php echo $form->textField($model,'store',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'erictric'); ?>
		<?php echo $form->textField($model,'erictric',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aia123'); ?>
		<?php echo $form->textField($model,'aia123',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'torousor'); ?>
		<?php echo $form->textField($model,'torousor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oceanlifeinsurance'); ?>
		<?php echo $form->textField($model,'oceanlifeinsurance',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other'); ?>
		<?php echo $form->textField($model,'other',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalamount'); ?>
		<?php echo $form->textField($model,'totalamount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portorsorbudget'); ?>
		<?php echo $form->textField($model,'portorsorbudget',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portorsorbumrung'); ?>
		<?php echo $form->textField($model,'portorsorbumrung',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nothaveclinic'); ?>
		<?php echo $form->textField($model,'nothaveclinic',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'doctorpostpaid'); ?>
		<?php echo $form->textField($model,'doctorpostpaid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'karraksapayaban'); ?>
		<?php echo $form->textField($model,'karraksapayaban',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'childeducationbudget'); ?>
		<?php echo $form->textField($model,'childeducationbudget',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonusghorepormore'); ?>
		<?php echo $form->textField($model,'bonusghorepormore',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tokburgother'); ?>
		<?php echo $form->textField($model,'tokburgother',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other2'); ?>
		<?php echo $form->textField($model,'other2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other3'); ?>
		<?php echo $form->textField($model,'other3',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ot'); ?>
		<?php echo $form->textField($model,'ot',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'moneytemkhan'); ?>
		<?php echo $form->textField($model,'moneytemkhan',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kharwichachive'); ?>
		<?php echo $form->textField($model,'kharwichachive',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kharklongchive'); ?>
		<?php echo $form->textField($model,'kharklongchive',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tokburg'); ?>
		<?php echo $form->textField($model,'tokburg',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'socialinsure'); ?>
		<?php echo $form->textField($model,'socialinsure',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gorsorjaw'); ?>
		<?php echo $form->textField($model,'gorsorjaw',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sorsorjaw'); ?>
		<?php echo $form->textField($model,'sorsorjaw',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aia2'); ?>
		<?php echo $form->textField($model,'aia2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aia3'); ?>
		<?php echo $form->textField($model,'aia3',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'library'); ?>
		<?php echo $form->textField($model,'library',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'positionname'); ?>
		<?php echo $form->textField($model,'positionname',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salarymonth'); ?>
		<?php echo $form->textField($model,'salarymonth',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lifeinsure'); ?>
		<?php echo $form->textField($model,'lifeinsure',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus'); ?>
		<?php echo $form->textField($model,'bonus',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ghbbank'); ?>
		<?php echo $form->textField($model,'ghbbank',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oomsinjor'); ?>
		<?php echo $form->textField($model,'oomsinjor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'korborkhortokburg'); ?>
		<?php echo $form->textField($model,'korborkhortokburg',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'korsorjawtokburg'); ?>
		<?php echo $form->textField($model,'korsorjawtokburg',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receiveother'); ?>
		<?php echo $form->textField($model,'receiveother',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dedugother'); ?>
		<?php echo $form->textField($model,'dedugother',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->