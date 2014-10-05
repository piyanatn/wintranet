<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
  


    <link rel="stylesheet"
              type="text/css"
              href="<?php echo Yii::app()->request->baseUrl; ?>/css/easyui/library/themes/default/easyui.css" />
     <link rel="stylesheet"
              type="text/css"
              href="<?php echo Yii::app()->request->baseUrl; ?>/css/easyui/library/themes/icon.css" />
       <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/easyui/library//jquery.min.js" /></script>
       <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/easyui/library/jquery.easyui.min.js" /></script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>


        
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <div align="center">
                                    <?php
                                    $this->widget(
                                                    'booster.widgets.TbCarousel',
                                                    array(
                                                        'items' => array(
                                                            array(
                                                                'image' => ('images/header.jpg'),
                                                                'label' => '',
                                                                'caption' => ''
                                                            ),
                                                            array(
                                                                'image' => ('images/header2.jpg'),
                                                                'label' => '',
                                                                'caption' => ''
                                                            ),
                                                            array(
                                                                'image' => ('images/header3.jpg'),
                                                                'label' => '',
                                                                'caption' => ''
                                                            ),
                                                            array(
                                                                'image' => ('images/header4.jpg'),
                                                                'label' => '',
                                                                'caption' => ''
                                                            ),
                                                        ),
                                                    )
                                                );
                                    ?>
                                    </div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                                               array('label'=>'เบอร์โทรศัพท์', 'url'=>array('/site/phonebook')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->getState('fullname').')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                <div class="row">
                                <div class="col-md-2">
                                 
                                    <br>
                                <?php
                                   if (Yii::app()->user->getState('fullname')) {
                                    $this->beginContent("/layouts/menu_left");
                                    $this->endContent();
                                    //visible only admin 
                                    if(Yii::app()->user->getState('level')==1){
                                        $this->beginContent("/layouts/menu_user");
                                        $this->endContent();
                                    }
                                            
                                    }
                                 ?>
                                </div>        
                                <div class="col-md-10">

                                    <?php echo $content; ?>
                                </div>     
                </div>    	
                </table>        
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Wichianburi Hospital.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
