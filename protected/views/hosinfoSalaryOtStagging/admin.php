<?php
/* @var $this HosinfoSalaryOtStaggingController */
/* @var $model HosinfoSalaryOtStagging */

$this->breadcrumbs=array(
	'Hosinfo Salary Ot Staggings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HosinfoSalaryOtStagging', 'url'=>array('index')),
	array('label'=>'Create HosinfoSalaryOtStagging', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hosinfo-user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Hosinfo Salary Ot Staggings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hosinfo-salary-ot-stagging-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'staging_id',
		'controlid',
		'cid',
		'officename',
		'fullname',
		'positoin',
		/*
		'ot',
		'ot_refer',
		'ot_noonandnight',
		'ot_or',
		'ot_healthpromotion',
		'ot_ems',
		'ot_workload',
		'ot_perhour',
		'ot_stanby',
		'ot_doctor_service',
		'ot_dental_service',
		'total',
		'salarymonth',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
