<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $model HosinfoSalaryfilecontrol */

$this->breadcrumbs=array(
	'Hosinfo Salaryfilecontrols'=>array('index'),
	$model->controlid=>array('view','id'=>$model->controlid),
	'Update',
);

$this->menu=array(
	array('label'=>'List HosinfoSalaryfilecontrol', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalaryfilecontrol', 'url'=>array('create')),
	array('label'=>'View HosinfoSalaryfilecontrol', 'url'=>array('view', 'id'=>$model->controlid)),
	array('label'=>'Manage HosinfoSalaryfilecontrol', 'url'=>array('admin')),
);
?>

<h1>Update HosinfoSalaryfilecontrol <?php echo $model->controlid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>