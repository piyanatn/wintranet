<?php
/* @var $this HosinfoUserController */
/* @var $model HosinfoUser */

$this->breadcrumbs=array(
	'Hosinfo Users'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List HosinfoUser', 'url'=>array('index')),
	array('label'=>'Create HosinfoUser', 'url'=>array('create')),
	array('label'=>'Update HosinfoUser', 'url'=>array('update', 'id'=>$model->idcard)),
	array('label'=>'Delete HosinfoUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcard),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HosinfoUser', 'url'=>array('admin')),
);
?>

<h1>View HosinfoUser #<?php echo $model->idcard; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcard',
		'hn',
		'fullname',
		'fname',
		'lname',
		'password',
		'emptype',
		'activate',
		'submitcount',
		'title',
		'department',
		'tel',
		'mobile',
		'startdate',
		'birtdate',
		'sex',
		'position',
		'start_gov_officer',
		'emp_status',
		'dep_group',
		'updatedby',
		'lastupdated',
		'resign',
		'resigndate',
		'access_carbooking',
		'access_carbooking_permission',
		'addrpart',
		'moopart',
		'tmbpart',
		'amppart',
		'chwpart',
		'road',
		'po_code',
		'father_name',
		'father_cid',
		'mother_name',
		'mother_cid',
		'married_name',
		'married_cid',
		'education_remark',
		'education',
		'salary',
		'rank',
		'gov_no',
		'emp_no',
		'emp_image',
	),
)); ?>
