<?php
/* @var $this HosinfoSalaryOtStaggingController */
/* @var $model HosinfoSalaryOtStagging */

$this->breadcrumbs=array(
	'Hosinfo Salary Ot Staggings'=>array('index'),
	$model->staging_id=>array('view','id'=>$model->staging_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HosinfoSalaryOtStagging', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalaryOtStagging', 'url'=>array('create')),
	array('label'=>'View HosinfoSalaryOtStagging', 'url'=>array('view', 'id'=>$model->staging_id)),
	array('label'=>'Manage HosinfoSalaryOtStagging', 'url'=>array('admin')),
);
?>

<h1>Update HosinfoSalaryOtStagging <?php echo $model->staging_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>