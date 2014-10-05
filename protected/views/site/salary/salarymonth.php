<?php
/* @var $this HosinfoSalarystagingController */
/* @var $model HosinfoSalarystaging */

$this->breadcrumbs=array(
	'salarymonthdetail',
);
?>
  
<div class="col-md-10">
 <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">ชื่อ-สกุล : <?php echo $model->fullname; ?></h4>
    <p class="list-group-item-text"><?php echo '<b>เลขที่บัตรประชาชน</b>  '.$model->idcard.' <b>สถานะ</b>: '.$model->employeetype; ?></p>
  </a>
</div>
    <li class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-plus-sign"> รายรับ</span></li>
<?php $this->widget('booster.widgets.TbDetailView',
        array(
	'data'=>$model,
               'type' =>'STRIPED bordered condensed',
            
                'attributes'=>array(
		array(
                                 'name'=>'salary',
                                 'type'=>'number',
                                'visible' => $model->salary > 0,
                                ),
		array(
                                 'name'=>'positionsalary',
                                 'type'=>'number',
                                'visible' => $model->positionsalary > 0,
                                ),
		array(
                                 'name'=>'tobtan',
                                 'type'=>'number',
                                'visible' => $model->tobtan > 0,
                                ),
		array(
                                 'name'=>'receiveother',
                                 'type'=>'number',
                                'visible' => $model->receiveother > 0,
                                ),
		array(
                                 'name'=>'bonus',
                                 'type'=>'number',
                                'visible' => $model->bonus > 0,
                                ),
	),
            

            
            
            
)); 


?>

</br>      
<li class="list-group-item list-group-item-danger"><span class="glyphicon glyphicon-minus-sign"> รายจ่าย</span></li>
<?php 

$this->widget('booster.widgets.TbDetailView',
        array(
	'data'=>$model,
                'type' =>'STRIPED bordered condensed',
	'attributes'=>array(
            		array(
                                 'name'=>'vat',
                                 'type'=>'number',
                                'visible' => $model->vat > 0,
                                ),
		array(
                                 'name'=>'chorkorsor',
                                 'type'=>'number',
                                'visible' => $model->chorkorsor > 0,
                                ),
		array(
                                 'name'=>'chorkorsorjorwar',
                                 'type'=>'number',
                                'visible' => $model->chorkorsorjorwar > 0,
                                ),
		array(
                                 'name'=>'chorkorsorkracoung',
                                 'type'=>'number',
                                'visible' => $model->chorkorsorkracoung > 0,
                                ),
		array(
                                 'name'=>'korborkhor',
                                 'type'=>'number',
                                'visible' => $model->korborkhor > 0,
                                ),
		array(
                                 'name'=>'korsorjaw',
                                 'type'=>'number',
                                'visible' => $model->korsorjaw > 0,
                                ),
		array(
                                 'name'=>'sahakorn',
                                 'type'=>'number',
                                'visible' => $model->sahakorn > 0,
                                ),
		array(
                                 'name'=>'oomsin',
                                 'type'=>'number',
                                'visible' => $model->oomsin > 0,
                                ),
		array(
                                 'name'=>'aia',
                                 'type'=>'number',
                                 'visible' => $model->aia > 0,
                                ),
		array(
                                 'name'=>'store',
                                 'type'=>'number',
                                'visible' => $model->store > 0,
                                ),
		array(
                                 'name'=>'erictric',
                                 'type'=>'number',
                                'visible' => $model->erictric > 0,
                                ),
		array(
                                 'name'=>'aia123',
                                 'type'=>'number',
                               'visible' => $model->aia123 > 0,
                                ),
		array(
                                 'name'=>'torousor',
                                 'type'=>'number',
                                'visible' => $model->torousor > 0,
                                ),
		array(
                                 'name'=>'oceanlifeinsurance',
                                 'type'=>'number',
                                'visible' => $model->oceanlifeinsurance > 0,
                                ),
		array(
                                 'name'=>'other',
                                 'type'=>'number',
                                'visible' => $model->other > 0,
                                ),
		array(
                                 'name'=>'portorsorbudget',
                                 'type'=>'number',
                                'visible' => $model->portorsorbudget > 0,
                                ),
		array(
                                 'name'=>'portorsorbumrung',
                                 'type'=>'number',
                                'visible' => $model->portorsorbumrung > 0,
                                ),
		array(
                                 'name'=>'nothaveclinic',
                                 'type'=>'number',
                                'visible' => $model->nothaveclinic > 0,
                                ),
		array(
                                 'name'=>'doctorpostpaid',
                                 'type'=>'number',
                                'visible' => $model->doctorpostpaid > 0,
                                ),
		array(
                                 'name'=>'karraksapayaban',
                                 'type'=>'number',
                                'visible' => $model->karraksapayaban > 0,
                                ),
		array(
                                 'name'=>'childeducationbudget',
                                 'type'=>'number',
                                'visible' => $model->childeducationbudget > 0,
                                ),
		array(
                                 'name'=>'bonusghorepormore',
                                 'type'=>'number',
                                'visible' => $model->bonusghorepormore > 0,
                                ),
		array(
                                 'name'=>'tokburgother',
                                 'type'=>'number',
                                'visible' => $model->tokburgother > 0,
                                ),
		array(
                                 'name'=>'other2',
                                 'type'=>'number',
                                'visible' => $model->other2 > 0,            
                                ),
		array(
                                 'name'=>'other3',
                                 'type'=>'number',
                                    'visible' => $model->other3 > 0,
                                ),
		array(
                                 'name'=>'ot',
                                 'type'=>'number',
                                    'visible' => $model->ot > 0,
                                ),
		array(
                                 'name'=>'moneytemkhan',
                                 'type'=>'number',
                                'visible' => $model->moneytemkhan > 0,            
                                ),
		array(
                                 'name'=>'kharwichachive',
                                 'type'=>'number',
                                    'visible' => $model->kharwichachive > 0,
                                ),
		array(
                                 'name'=>'kharklongchive',
                                 'type'=>'number',
                                'visible' => $model->kharklongchive > 0,            
                                ),
		array(
                                 'name'=>'tokburg',
                                 'type'=>'number',
                                'visible' => $model->tokburg > 0,            
                                ),
		array(
                                 'name'=>'socialinsure',
                                 'type'=>'number',
                                 'visible' => $model->socialinsure > 0,
                                ),
            		array(
                                 'name'=>'gorsorjaw',
                                 'type'=>'number',
                                'visible' => $model->gorsorjaw > 0,
                                ),
            		array(
                                 'name'=>'sorsorjaw',
                                 'type'=>'number',
                                'visible' => $model->sorsorjaw > 0,
                                ),
            		array(
                                 'name'=>'aia2',
                                 'type'=>'number',
                                'visible' => $model->aia2 > 0,
                                ),
            		array(
                                 'name'=>'aia3',
                                 'type'=>'number',
                                'visible' => $model->aia3 > 0,
                                ),
            		array(
                                 'name'=>'lifeinsure',
                                 'type'=>'number',
                                'visible' => $model->lifeinsure > 0,
                                ),
            		array(
                                 'name'=>'ghbbank',
                                 'type'=>'number',
                                'visible' => $model->ghbbank > 0,
                                ),
            		array(
                                 'name'=>'oomsinjor',
                                 'type'=>'number',
                                'visible' => $model->oomsinjor > 0,
                                ),
            		array(
                                 'name'=>'korborkhortokburg',
                                 'type'=>'number',
                                'visible' => $model->korborkhortokburg > 0,
                                ),
            		array(
                                 'name'=>'korsorjawtokburg',
                                 'type'=>'number',
                                'visible' => $model->korsorjawtokburg > 0,
                                ),
            		array(
                                 'name'=>'dedugother',
                                 'type'=>'number',
                                'visible' => $model->dedugother > 0,
                                ),
	),
)); 

?>
<br>
<div class="alert alert-info"><h3>คงเหลือ 
    <?php 
           echo number_format($model->totalamount); 
    ?> 
        บาท</h3></div>   
    </div>
