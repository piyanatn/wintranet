<?php
/* @var $this HosinfoSalarystagingController */
/* @var $model HosinfoSalarystaging */

$this->widget(
    'booster.widgets.TbBreadcrumbs',
    array(
        'links' => array('userinfo'=>'#')
    )
);
?>

<div class="col-md-10">

<div class="alert alert-info"><h3>ข้อมูลบุคลากร</h3></div>   

<div align="right">
    <?php echo CHtml::beginForm(); ?>  
     <div class="row">
        <?php echo CHtml::activeLabel($model,'password'); ?>
        <?php echo CHtml::activeTextField($model,'password') ?>
    </div>
 <div class="row submit">
        <?php echo CHtml::submitButton('Reset Password'); ?>
    </div>
<?php 

$url = Yii::app()->createAbsoluteUrl('userinfo/ResetPwd', array('id'=>$model->idcard));
$this->widget(
    'booster.widgets.TbButton',
    array(
        'label' => 'รีเซ็ตรหัสผ่าน',
        'context' => 'danger',
        'buttonType' =>'submit',
        //'url'=>'httpd://www.fbcomputer.in.th'
        
          'htmlOptions' => array(
                       //'onclick' => 'js:bootbox.confirm("ยืนยันการ Reset รหัสผ่าน", '
                         //   . ' function(confirmed)  {if(confirmed) { window.location = "'.$url.'";}})'
                                   //    .' \'url\'=>Yii::app()->createUrl("userinfo/ResetPwd", array("id"=>$model->idcard)), '
                         'onclick' => 'js:bootbox.confirm("ยืนยันการ Reset รหัสผ่าน", '
                                                                    . ' function(confirmed){console.log("Confirmed: "+confirmed);})'
                          ),
    )
);
echo "</div>";
echo "<br>";
$this->widget('booster.widgets.TbDetailView',
        array(
	'data'=>$model,
               'type' =>'STRIPED bordered condensed',
            
                'attributes'=>array(
		array(
                                 'name'=>'idcard',
                                ),
		array(
                                 'name'=>'title',
                                ),
		array(
                                 'name'=>'fname',
                                ),
		array(
                                 'name'=>'lname',
                                ),
		array(
                                 'name'=>'birtdate',
                                ),
	),
            

            
            
            
)); 


?>
    <?php echo CHtml::endForm(); ?>
    </div>


