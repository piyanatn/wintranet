<br>
<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $dataProvider CActiveDataProvider */

$this->widget(
    'booster.widgets.TbBreadcrumbs',
    array(
        'links' => array('salarymonthlist'=>'#')
    )
);
?>

<div class="col-md-10">
<?php
$this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
        'fixedHeader' => true,
        'headerOffset' => 40,
        // 40px is the height of the main navigation at bootstrap
       'type' => 'striped bordered condensed',
        'dataProvider' => $model->search(),
        'responsiveTable' => true,
        'template' => "{items}{pager}",
        'columns' => array('stagingid',
            'R_HosinfoSalaryfilecontrol.uploadmonth',
            array(
                'name'=>'salary',
                'value'=>'$data->salary',
                'type'=>'number',
               ),
            array(
                'name'=>'totalamount',
                'value'=>'$data->totalamount',
                'type'=>'number',
               ),
            'R_HosinfoSalaryfilecontrol.uploaddatetime',
             array(
		'htmlOptions' => array('nowrap'=>'nowrap'),
                                'template'=>'{view}',
		'class'=>'booster.widgets.TbButtonColumn',
                              'buttons'=>array(           
                                    'view' => array(
                                        'label'=>'ดูรายละเอียด',
                                        'url'=>'Yii::app()->createUrl("site/salarymonth", array("id"=>$data->stagingid))',
                                            'options'=>array(
                                            'class'=>'btn btn-large',
                                            ),
                                    ), 

                       ),
                            
	         ),
  
            ),
    )
);
 ?>
    </div>





