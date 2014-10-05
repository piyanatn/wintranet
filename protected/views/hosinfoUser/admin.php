<?php
/* @var $this HosinfoUserController */
/* @var $model HosinfoUser */

$this->breadcrumbs=array(
	'Hosinfo Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List HosinfoUser', 'url'=>array('index')),
	array('label'=>'Create HosinfoUser', 'url'=>array('create')),
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

<h1>Manage Hosinfo Users</h1>

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
	'id'=>'hosinfo-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idcard',
		'hn',
		'fullname',
		'fname',
		'lname',
		'password',
		/*
		'emptype',
		'activate',
		'submitcount',
		'title',
		'department',
		'tel',
		'mobile',
		'startdate',
		'birtdate',
		'sex',
		'position',
		'start_gov_officer',
		'emp_status',
		'dep_group',
		'updatedby',
		'lastupdated',
		'resign',
		'resigndate',
		'access_carbooking',
		'access_carbooking_permission',
		'addrpart',
		'moopart',
		'tmbpart',
		'amppart',
		'chwpart',
		'road',
		'po_code',
		'father_name',
		'father_cid',
		'mother_name',
		'mother_cid',
		'married_name',
		'married_cid',
		'education_remark',
		'education',
		'salary',
		'rank',
		'gov_no',
		'emp_no',
		'emp_image',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
