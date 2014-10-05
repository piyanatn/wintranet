<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $data HosinfoSalaryfilecontrol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('controlid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->controlid), array('view', 'id'=>$data->controlid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excelfile')); ?>:</b>
	<?php echo CHtml::encode($data->excelfile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploaddatetime')); ?>:</b>
	<?php echo CHtml::encode($data->uploaddatetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userlogin')); ?>:</b>
	<?php echo CHtml::encode($data->userlogin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploadmonth')); ?>:</b>
	<?php echo CHtml::encode($data->uploadmonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalrecord')); ?>:</b>
	<?php echo CHtml::encode($data->totalrecord); ?>
	<br />


</div>