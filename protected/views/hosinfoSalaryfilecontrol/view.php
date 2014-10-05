<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $model HosinfoSalaryfilecontrol */

$this->breadcrumbs=array(
	'Hosinfo Salaryfilecontrols'=>array('index'),
	$model->controlid,
);

$this->menu=array(
	array('label'=>'List HosinfoSalaryfilecontrol', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalaryfilecontrol', 'url'=>array('create')),
	array('label'=>'Update HosinfoSalaryfilecontrol', 'url'=>array('update', 'id'=>$model->controlid)),
	array('label'=>'Delete HosinfoSalaryfilecontrol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->controlid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HosinfoSalaryfilecontrol', 'url'=>array('admin')),
);
?>

<h1>View HosinfoSalaryfilecontrol #<?php echo $model->controlid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'controlid',
		'excelfile',
		'uploaddatetime',
		'userlogin',
		'uploadmonth',
		'totalrecord',
	),
)); ?>
