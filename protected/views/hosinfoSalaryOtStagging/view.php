<?php
/* @var $this HosinfoSalaryOtStaggingController */
/* @var $model HosinfoSalaryOtStagging */

$this->breadcrumbs=array(
	'Hosinfo Salary Ot Staggings'=>array('index'),
	$model->staging_id,
);

$this->menu=array(
	array('label'=>'List HosinfoSalaryOtStagging', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalaryOtStagging', 'url'=>array('create')),
	array('label'=>'Update HosinfoSalaryOtStagging', 'url'=>array('update', 'id'=>$model->staging_id)),
	array('label'=>'Delete HosinfoSalaryOtStagging', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->staging_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HosinfoSalaryOtStagging', 'url'=>array('admin')),
);
?>

<h1>View HosinfoSalaryOtStagging #<?php echo $model->staging_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'staging_id',
		'controlid',
		'cid',
		'officename',
		'fullname',
		'positoin',
		'ot',
		'ot_refer',
		'ot_noonandnight',
		'ot_or',
		'ot_healthpromotion',
		'ot_ems',
		'ot_workload',
		'ot_perhour',
		'ot_stanby',
		'ot_doctor_service',
		'ot_dental_service',
		'total',
		'salarymonth',
	),
)); ?>
