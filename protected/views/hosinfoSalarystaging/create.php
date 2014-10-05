<?php
/* @var $this HosinfoSalarystagingController */
/* @var $model HosinfoSalarystaging */

$this->breadcrumbs=array(
	'Hosinfo Salarystagings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HosinfoSalarystaging', 'url'=>array('index')),
	array('label'=>'Manage HosinfoSalarystaging', 'url'=>array('admin')),
);
?>

<h1>Create HosinfoSalarystaging</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>