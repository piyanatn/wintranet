   <?php
$form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'newuser-form',
        'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'clientOptions'=>array(
       'validateOnSubmit'=>true,),
       'htmlOptions' => array('class' => 'well'), // for inset effect
    )
);
 ?>
   <div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">เพิ่มรายการเจ้าหน้าที่</h4>
    <p class="list-group-item-text">เพิ่มรายการผู้ใช้งานระบบ</p>
  </a>
</div>
<div class='row'>
    
        <div class='col-lg-5'>
                    <?php
                                    echo $form->textFieldGroup($model,'idcard',array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-3',
				),
				'hint' => ''
			)); 
                     ?>
        </div>
     <div class='col-lg-4'>
                                <?php echo $form->dropDownListGroup(
			$model,
			'emptype',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('ข้าราชการ', 'พนักงานราชการ', 'ลูกจ้างประจำ','ลูกจ้างชั่วคราว','พนักงานกระทรวงสาธารณสุข'),
					'htmlOptions' => array(),
				)
			)
		); ?> 
        </div>
</div>
<div class='row'>
        <div class='col-lg-2'>
        <?php echo $form->dropDownListGroup(
			$model,
			'title',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('คุณ', 'นาย', 'นางสาว','นาง'),
					'htmlOptions' => array(),
				)
			)
		); ?> 
        </div>
        <div class='col-lg-3'>
                    <?php
                                        echo $form->textFieldGroup($model,'fname',array(
    
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-3',
                                                                                'length'=>'13',
				),
				'hint' => ''
			)); 
                     ?>
        </div>
  <div class='col-lg-4'>
                                         <?php
                                                echo $form->textFieldGroup($model,'lname',array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-3',
				),
				'hint' => ''
			)); 
                     ?>
        </div>
</div>
<div class='row'>
        <div class='col-lg-2'>
                                <?php echo $form->dropDownListGroup(
			$model,
			'sex',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'data' => array('เลือกเพศ', 'ชาย', 'หญิง'),
					'htmlOptions' => array(),
				)
			)
		); ?> 
        </div>
 <div class='col-lg-3'>
                              <?php echo $form->datePickerGroup(
			$model,
			'birthdate',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'th',
					),
				),

				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'hint' => '',
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>
        </div>
</div>
<div class='row'>
      <?php //echo $form->hiddenField($model,'fullname',$model->fname); ?>
</div>
<div class='row'>
        <div class='col-lg-9'>
            <div class="form-actions" align="right">
                  <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php 
                                                $this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'primary',
				'label' => 'เพิ่มข้อมูล',
                                                                
                                                                'htmlOptions' => array(
                                                                                'class'=>'disabled',
                                                                                 'onclick' => 'js:bootbox.confirm("ยืนยันการเพิ่มข้อมูล", '
                                                                    . ' function(confirmed){console.log("Confirmed: "+confirmed);})'
                                                                            ),
                                                                               
			)
		);       
                ?>
                             
		<?php $this->widget(
			'booster.widgets.TbButton',
			array('buttonType' => 'ยกเลิก', 'label' => 'Reset')
		); ?>
	</div>
        </div>
</div>

<?php        
$this->endWidget();
unset($form);
?>