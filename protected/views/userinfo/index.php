<?php
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

<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">รายการผู้ใช้งาน</h4>
    <p class="list-group-item-text">สำหรับตรวจสอบและแก้ไขผู้ใช้งาน</p>
  </a>
</div>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); 

?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div>
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
    <div class="row">
                               <?php // echo $model->fullname; ?>
		 <label>เลขบัตรประชาชน </label>  
		<?php echo $form->textField($model,'idcard',array('size'=>13,'maxlength'=>13)); ?>
                                <button type="submit" class="btn btn-default">ค้นหา</button>
	</div>
  
<?php $this->endWidget(); ?>

</div>
<div >
<?php
$this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
        'id'=>'hosinfo-user-grid',
        'fixedHeader' => true,
        'headerOffset' => 40,
        // 40px is the height of the main navigation at bootstrap
       'type' => 'striped bordered condensed',
        'dataProvider' => $model->search(),
        'responsiveTable' => true,
        'template' => "{items}{pager}",
      //  'filter' => $model,
        'columns' => array('idcard',
            'fullname',
            'emptype',
            array(
                'name'=>'sex',
               'value'=>function($data,$row){
                    if ($data->sex=='1') return 'ชาย';
                    elseif ($data->sex=='2')  return "หญิง";
                    else return "";
                 }
                ),
            array(
                'name'=>'emp_status',
               'value'=>function($data,$row){
                    if ($data->emp_status=='1') return 'เปิดใช้งาน';
                    elseif ($data->sex=='0')  return "ยังไม่เปิดใช้งาน";
                    else return "";
                 }
                ),

            array(
		'htmlOptions' => array('nowrap'=>'nowrap'),
                                'template'=>'{view}',
		'class'=>'booster.widgets.TbButtonColumn',
                              'buttons'=>array(           
                                    'view' => array(
                                        'label'=>'ดูรายละเอียด',
                                        
                                        'url'=>'Yii::app()->createUrl("userinfo/update", array("id"=>$data->idcard))',
                                            'options'=>array(
                                            'class'=>'btn btn-large',
                                            ),
                                    ), 

                       ),
                            
	         )
            ),
    )
);
 ?>
    </div>





