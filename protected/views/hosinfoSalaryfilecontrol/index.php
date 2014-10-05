<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hosinfo Salaryfilecontrols',
);

$this->menu=array(
	array('label'=>'Create HosinfoSalaryfilecontrol', 'url'=>array('create')),
	array('label'=>'Manage HosinfoSalaryfilecontrol', 'url'=>array('admin')),
);
?>

<h1>Hosinfo Salaryfilecontrols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
