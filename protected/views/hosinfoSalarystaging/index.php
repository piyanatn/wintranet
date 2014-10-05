<?php
/* @var $this HosinfoSalarystagingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hosinfo Salarystagings',
);

$this->menu=array(
	array('label'=>'Create HosinfoSalarystaging', 'url'=>array('create')),
	array('label'=>'Manage HosinfoSalarystaging', 'url'=>array('admin')),
);
?>

<h1>Hosinfo Salarystagings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
