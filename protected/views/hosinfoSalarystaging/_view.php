<?php
/* @var $this HosinfoSalarystagingController */
/* @var $data HosinfoSalarystaging */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stagingid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stagingid), array('view', 'id'=>$data->stagingid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcard')); ?>:</b>
	<?php echo CHtml::encode($data->idcard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeetype')); ?>:</b>
	<?php echo CHtml::encode($data->employeetype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary')); ?>:</b>
	<?php echo CHtml::encode($data->salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('controlid')); ?>:</b>
	<?php echo CHtml::encode($data->controlid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('positionsalary')); ?>:</b>
	<?php echo CHtml::encode($data->positionsalary); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tobtan')); ?>:</b>
	<?php echo CHtml::encode($data->tobtan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat')); ?>:</b>
	<?php echo CHtml::encode($data->vat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chorkorsor')); ?>:</b>
	<?php echo CHtml::encode($data->chorkorsor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chorkorsorjorwar')); ?>:</b>
	<?php echo CHtml::encode($data->chorkorsorjorwar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chorkorsorkracoung')); ?>:</b>
	<?php echo CHtml::encode($data->chorkorsorkracoung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('korborkhor')); ?>:</b>
	<?php echo CHtml::encode($data->korborkhor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('korsorjaw')); ?>:</b>
	<?php echo CHtml::encode($data->korsorjaw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sahakorn')); ?>:</b>
	<?php echo CHtml::encode($data->sahakorn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oomsin')); ?>:</b>
	<?php echo CHtml::encode($data->oomsin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aia')); ?>:</b>
	<?php echo CHtml::encode($data->aia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store')); ?>:</b>
	<?php echo CHtml::encode($data->store); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('erictric')); ?>:</b>
	<?php echo CHtml::encode($data->erictric); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aia123')); ?>:</b>
	<?php echo CHtml::encode($data->aia123); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('torousor')); ?>:</b>
	<?php echo CHtml::encode($data->torousor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oceanlifeinsurance')); ?>:</b>
	<?php echo CHtml::encode($data->oceanlifeinsurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalamount')); ?>:</b>
	<?php echo CHtml::encode($data->totalamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portorsorbudget')); ?>:</b>
	<?php echo CHtml::encode($data->portorsorbudget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portorsorbumrung')); ?>:</b>
	<?php echo CHtml::encode($data->portorsorbumrung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nothaveclinic')); ?>:</b>
	<?php echo CHtml::encode($data->nothaveclinic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorpostpaid')); ?>:</b>
	<?php echo CHtml::encode($data->doctorpostpaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('karraksapayaban')); ?>:</b>
	<?php echo CHtml::encode($data->karraksapayaban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('childeducationbudget')); ?>:</b>
	<?php echo CHtml::encode($data->childeducationbudget); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonusghorepormore')); ?>:</b>
	<?php echo CHtml::encode($data->bonusghorepormore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tokburgother')); ?>:</b>
	<?php echo CHtml::encode($data->tokburgother); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other2')); ?>:</b>
	<?php echo CHtml::encode($data->other2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other3')); ?>:</b>
	<?php echo CHtml::encode($data->other3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ot')); ?>:</b>
	<?php echo CHtml::encode($data->ot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneytemkhan')); ?>:</b>
	<?php echo CHtml::encode($data->moneytemkhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kharwichachive')); ?>:</b>
	<?php echo CHtml::encode($data->kharwichachive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kharklongchive')); ?>:</b>
	<?php echo CHtml::encode($data->kharklongchive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tokburg')); ?>:</b>
	<?php echo CHtml::encode($data->tokburg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('socialinsure')); ?>:</b>
	<?php echo CHtml::encode($data->socialinsure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gorsorjaw')); ?>:</b>
	<?php echo CHtml::encode($data->gorsorjaw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sorsorjaw')); ?>:</b>
	<?php echo CHtml::encode($data->sorsorjaw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aia2')); ?>:</b>
	<?php echo CHtml::encode($data->aia2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aia3')); ?>:</b>
	<?php echo CHtml::encode($data->aia3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('library')); ?>:</b>
	<?php echo CHtml::encode($data->library); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('positionname')); ?>:</b>
	<?php echo CHtml::encode($data->positionname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salarymonth')); ?>:</b>
	<?php echo CHtml::encode($data->salarymonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lifeinsure')); ?>:</b>
	<?php echo CHtml::encode($data->lifeinsure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus')); ?>:</b>
	<?php echo CHtml::encode($data->bonus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ghbbank')); ?>:</b>
	<?php echo CHtml::encode($data->ghbbank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oomsinjor')); ?>:</b>
	<?php echo CHtml::encode($data->oomsinjor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('korborkhortokburg')); ?>:</b>
	<?php echo CHtml::encode($data->korborkhortokburg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('korsorjawtokburg')); ?>:</b>
	<?php echo CHtml::encode($data->korsorjawtokburg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receiveother')); ?>:</b>
	<?php echo CHtml::encode($data->receiveother); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dedugother')); ?>:</b>
	<?php echo CHtml::encode($data->dedugother); ?>
	<br />

	*/ ?>

</div>