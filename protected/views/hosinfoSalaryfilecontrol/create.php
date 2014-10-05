<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $model HosinfoSalaryfilecontrol */

$this->breadcrumbs=array(
	'Hosinfo Salaryfilecontrols'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HosinfoSalaryfilecontrol', 'url'=>array('index')),
	array('label'=>'Manage HosinfoSalaryfilecontrol', 'url'=>array('admin')),
);
?>

<h1>Create HosinfoSalaryfilecontrol</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>