<br>
<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $dataProvider CActiveDataProvider */


$this->widget(
    'booster.widgets.TbBreadcrumbs',
    array(
        'links' => array('leaveinfo'=>'#')
    )
);
?>
<div class="col-md-10">
    <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">รายการวันลา</h4>
    <p class="list-group-item-text"><?php echo 'ตั้งแต่วันที่ '.Yii::app()->KDate->getStartBudgetDate().'  ถึงวันที่ '.Yii::app()->KDate->getEndBudgetDate(); ?></p>
  </a>
</div>
<?php

$this->widget(
    'booster.widgets.TbExtendedGridView',
    array(
        'fixedHeader' => true,
        'headerOffset' => 40,
        // 40px is the height of the main navigation at bootstrap
        'type' => 'striped',
        'dataProvider' => $model->search(),
        'responsiveTable' => true,
        'template' => "{pager}{items}",
        'columns' => array(
            array(
                'name'=>'levae_type',
                'value'=>'$data->levae_type',
               ),
            array(
                'name'=>'leave_start',
               // 'value'=>'$data->leave_start',
                 'value'=>'Yii::app()->KDate->convertMysqlToThaiDate($data->leave_start)',
               ),
            array(
                'name'=>'leave_end',
              //  'value'=>'$data->leave_end',
                 'value'=>'Yii::app()->KDate->convertMysqlToThaiDate($data->leave_end)',
                
               ),
            array(
                'name'=>'leave_total',
                'value'=>'$data->leave_total',
                'type'=>'number',
               ),
            ),
    )
);
 ?>
    </div>