<?php
/* @var $this HosinfoUserController */
/* @var $data HosinfoUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcard')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcard), array('view', 'id'=>$data->idcard)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hn')); ?>:</b>
	<?php echo CHtml::encode($data->hn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emptype')); ?>:</b>
	<?php echo CHtml::encode($data->emptype); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('activate')); ?>:</b>
	<?php echo CHtml::encode($data->activate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submitcount')); ?>:</b>
	<?php echo CHtml::encode($data->submitcount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startdate')); ?>:</b>
	<?php echo CHtml::encode($data->startdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birtdate')); ?>:</b>
	<?php echo CHtml::encode($data->birtdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_gov_officer')); ?>:</b>
	<?php echo CHtml::encode($data->start_gov_officer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_status')); ?>:</b>
	<?php echo CHtml::encode($data->emp_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_group')); ?>:</b>
	<?php echo CHtml::encode($data->dep_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedby')); ?>:</b>
	<?php echo CHtml::encode($data->updatedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastupdated')); ?>:</b>
	<?php echo CHtml::encode($data->lastupdated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resign')); ?>:</b>
	<?php echo CHtml::encode($data->resign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resigndate')); ?>:</b>
	<?php echo CHtml::encode($data->resigndate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('access_carbooking')); ?>:</b>
	<?php echo CHtml::encode($data->access_carbooking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('access_carbooking_permission')); ?>:</b>
	<?php echo CHtml::encode($data->access_carbooking_permission); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addrpart')); ?>:</b>
	<?php echo CHtml::encode($data->addrpart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moopart')); ?>:</b>
	<?php echo CHtml::encode($data->moopart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tmbpart')); ?>:</b>
	<?php echo CHtml::encode($data->tmbpart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amppart')); ?>:</b>
	<?php echo CHtml::encode($data->amppart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chwpart')); ?>:</b>
	<?php echo CHtml::encode($data->chwpart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('road')); ?>:</b>
	<?php echo CHtml::encode($data->road); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('po_code')); ?>:</b>
	<?php echo CHtml::encode($data->po_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_name')); ?>:</b>
	<?php echo CHtml::encode($data->father_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_cid')); ?>:</b>
	<?php echo CHtml::encode($data->father_cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_name')); ?>:</b>
	<?php echo CHtml::encode($data->mother_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_cid')); ?>:</b>
	<?php echo CHtml::encode($data->mother_cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('married_name')); ?>:</b>
	<?php echo CHtml::encode($data->married_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('married_cid')); ?>:</b>
	<?php echo CHtml::encode($data->married_cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('education_remark')); ?>:</b>
	<?php echo CHtml::encode($data->education_remark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('education')); ?>:</b>
	<?php echo CHtml::encode($data->education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary')); ?>:</b>
	<?php echo CHtml::encode($data->salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rank')); ?>:</b>
	<?php echo CHtml::encode($data->rank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gov_no')); ?>:</b>
	<?php echo CHtml::encode($data->gov_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_no')); ?>:</b>
	<?php echo CHtml::encode($data->emp_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_image')); ?>:</b>
	<?php echo CHtml::encode($data->emp_image); ?>
	<br />

	*/ ?>

</div>