<?php
/* @var $this HosinfoSalaryOtStaggingController */
/* @var $model HosinfoSalaryOtStagging */

$this->breadcrumbs=array(
	'Hosinfo Salary Ot Staggings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HosinfoSalaryOtStagging', 'url'=>array('index')),
	array('label'=>'Manage HosinfoSalaryOtStagging', 'url'=>array('admin')),
);
?>

<h1>Create HosinfoSalaryOtStagging</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>