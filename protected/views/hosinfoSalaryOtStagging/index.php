<?php
/* @var $this HosinfoSalaryOtStaggingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hosinfo Salary Ot Staggings',
);

$this->menu=array(
	array('label'=>'Create HosinfoSalaryOtStagging', 'url'=>array('create')),
	array('label'=>'Manage HosinfoSalaryOtStagging', 'url'=>array('admin')),
);
?>

<h1>Hosinfo Salary Ot Staggings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
