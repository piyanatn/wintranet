<?php
/* @var $this HosinfoSalarystagingController */
/* @var $model HosinfoSalarystaging */

$this->breadcrumbs=array(
	'Hosinfo Salarystagings'=>array('index'),
	$model->stagingid=>array('view','id'=>$model->stagingid),
	'Update',
);

$this->menu=array(
	array('label'=>'List HosinfoSalarystaging', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalarystaging', 'url'=>array('create')),
	array('label'=>'View HosinfoSalarystaging', 'url'=>array('view', 'id'=>$model->stagingid)),
	array('label'=>'Manage HosinfoSalarystaging', 'url'=>array('admin')),
);
?>

<h1>Update HosinfoSalarystaging <?php echo $model->stagingid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>