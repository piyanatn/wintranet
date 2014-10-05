<?php
/* @var $this HosinfoSalarystagingController */
/* @var $model HosinfoSalarystaging */

$this->breadcrumbs=array(
	'Hosinfo Salarystagings'=>array('index'),
	$model->stagingid,
);

$this->menu=array(
	array('label'=>'List HosinfoSalarystaging', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalarystaging', 'url'=>array('create')),
	array('label'=>'Update HosinfoSalarystaging', 'url'=>array('update', 'id'=>$model->stagingid)),
	array('label'=>'Delete HosinfoSalarystaging', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stagingid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HosinfoSalarystaging', 'url'=>array('admin')),
);

$this->menu=array(
	array('label'=>'List HosinfoSalarystaging', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalarystaging', 'url'=>array('create')),
	array('label'=>'Update HosinfoSalarystaging', 'url'=>array('update', 'id'=>$model->stagingid)),
	array('label'=>'Delete HosinfoSalarystaging', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stagingid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HosinfoSalarystaging', 'url'=>array('admin')),
);

?>

<h1><?php echo $model->salarymonth; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcard',
		'fullname',
		'employeetype',
		'salary',
		'controlid',
		'positionsalary',
		'tobtan',
		'vat',
		'chorkorsor',
		'chorkorsorjorwar',
		'chorkorsorkracoung',
		'korborkhor',
		'korsorjaw',
		'sahakorn',
		'oomsin',
		'aia',
		'store',
		'erictric',
		'aia123',
		'torousor',
		'oceanlifeinsurance',
		'other',
		'totalamount',
		'portorsorbudget',
		'portorsorbumrung',
		'nothaveclinic',
		'doctorpostpaid',
		'karraksapayaban',
		'childeducationbudget',
		'bonusghorepormore',
		'tokburgother',
		'other2',
		'other3',
		'ot',
		'moneytemkhan',
		'kharwichachive',
		'kharklongchive',
		'tokburg',
		'socialinsure',
		'gorsorjaw',
		'sorsorjaw',
		'aia2',
		'aia3',
		'library',
		'positionname',
		'salarymonth',
		'lifeinsure',
		'bonus',
		'ghbbank',
		'oomsinjor',
		'korborkhortokburg',
		'korsorjawtokburg',
		'receiveother',
		'dedugother',
	),
)); ?>
