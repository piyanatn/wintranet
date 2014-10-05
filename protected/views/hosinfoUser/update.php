<?php
/* @var $this HosinfoUserController */
/* @var $model HosinfoUser */

$this->breadcrumbs=array(
	'Hosinfo Users'=>array('index'),
	$model->title=>array('view','id'=>$model->idcard),
	'Update',
);

$this->menu=array(
	array('label'=>'List HosinfoUser', 'url'=>array('index')),
	array('label'=>'Create HosinfoUser', 'url'=>array('create')),
	array('label'=>'View HosinfoUser', 'url'=>array('view', 'id'=>$model->idcard)),
	array('label'=>'Manage HosinfoUser', 'url'=>array('admin')),
);
?>

<h1>Update HosinfoUser <?php echo $model->idcard; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>