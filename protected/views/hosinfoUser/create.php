<?php
/* @var $this HosinfoUserController */
/* @var $model HosinfoUser */

$this->breadcrumbs=array(
	'Hosinfo Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HosinfoUser', 'url'=>array('index')),
	array('label'=>'Manage HosinfoUser', 'url'=>array('admin')),
);
?>

<h1>Create HosinfoUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>