<?php
/* @var $this HosinfoUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hosinfo Users',
);

$this->menu=array(
	array('label'=>'Create HosinfoUser', 'url'=>array('create')),
	array('label'=>'Manage HosinfoUser', 'url'=>array('admin')),
);
?>

<h1>Hosinfo Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
