<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>เข้าสู่ระบบ:</h1>

<div class="form">
    
<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm',array(
        'id' => 'login-form',
        'type' => 'horizontal',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
       'validateOnSubmit'=>true,),
       'htmlOptions' => array('class' => 'well'), // for inset effect
    )
);
echo $form->textFieldGroup($model,'username',array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'hint' => 'ใส่เลขประจำตัวประชาชน 13 หลัก.'
			)); 
echo $form->passwordFieldGroup($model,'password',array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'hint' => '4 ตัวท้ายของเลขบัตรประจำตัวประชาชน.'
			)); 
echo $form->checkboxGroup($model,'rememberMe'); 
//echo $form->textFieldGroup($model, 'รหัสผู้ใช้');
//echo $form->passwordFieldGroup($model, 'password');
//echo $form->checkboxGroup($model, 'checkbox');
   echo "<div class=\"large-12 text-center columns\">";
		$this->widget(
			'booster.widgets.TbButton',
			array(
				'buttonType' => 'submit',
				'context' => 'primary',
				'label' => 'Submit'
			)
		); 
                                echo " ";    
		$this->widget(
			'booster.widgets.TbButton',
			array(
                                                        'buttonType' => 'reset', 
                                                         'context' => 'danger',
                                                        'label' => 'Reset'
                                                        )
		); 
                        echo "</div>";
$this->endWidget();
unset($form);
?>
                     
</div><!-- form -->



