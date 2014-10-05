<br>
<?php
/* @var $this HosinfoSalaryfilecontrolController */
/* @var $dataProvider CActiveDataProvider */

$this->widget(
    'booster.widgets.TbBreadcrumbs',
    array(
        'links' => array('OT'=>'#')
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
        'type' => 'striped',
        'dataProvider' => $model->search(),
        'responsiveTable' => true,
        'template' => "{pager}{items}",
        'columns' => array(
            array(
                'name'=>'salarymonth',
                'value'=>'$data->salarymonth',
               ),
            array(
                'name'=>'ot',
                'value'=>'$data->ot',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_refer',
                'value'=>'$data->ot_refer',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_noonandnight',
                'value'=>'$data->ot_noonandnight',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_or',
                'value'=>'$data->ot_or',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_healthpromotion',
                'value'=>'$data->ot_healthpromotion',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_ems',
                'value'=>'$data->ot_ems',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_workload',
                'value'=>'$data->ot_workload',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_perhour',
                'value'=>'$data->ot_perhour',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_stanby',
                'value'=>'$data->ot_stanby',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_doctor_service',
                'value'=>'$data->ot_doctor_service',
                'type'=>'number',
               ),
            array(
                'name'=>'ot_dental_service',
                'value'=>'$data->ot_dental_service',
                'type'=>'number',
               ),
            array(
                'name'=>'total',
                'value'=>'$data->total',
               'type'=>'number',
               ),

            ),
    )
);
 ?>
    </div>