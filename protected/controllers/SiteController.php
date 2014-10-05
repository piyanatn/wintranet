<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
                public $layout='//layouts/main';
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            
            if (Yii::app()->user->getState('fullname')===null)
                   
            {     
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
                                //$this->render('index');
                $model=new LoginForm;
                if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
                                $this->render('login',array('model'=>$model));
                                
            }else {
               $this->render('index');
        }
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
                public function actionPhonebook()
                {            $model=new HosinfoTelephone('search');
                            $model->unsetAttributes();  // clear any default values
                                if(isset($_GET['HosinfoTelephone']))
                                        $model->attributes=$_GET['HosinfoTelephone'];
		$this->render('phonebook',array('model'=>$model));
                }
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        public function actionSalary()
	{
                $model=new HosinfoSalarystaging('search');
                                $model->unsetAttributes();  // clear any default values
                                if(isset($_GET['HosinfoSalarystaging']))
                                        $model->attributes=$_GET['HosinfoSalarystaging'];

		$this->render('salary/index',array('model'=>$model));
	}

       public function actionLeaveinfo()
	{
          
                $model=new HosinfoLeave('search');
                                $model->unsetAttributes();  // clear any default values
                                if(isset($_GET['HosinfoLeave']))
                                        $model->attributes=$_GET['HosinfoLeave'];

		$this->render('salary/leaveinfo',array('model'=>$model));

	}
               public function actionOtinfo()
	{
          
                $model=new HosinfoSalaryOtStagging('search');
                                $model->unsetAttributes();  // clear any default values
                                if(isset($_GET['HosinfoSalaryOtStagging']))
                                        $model->attributes=$_GET['HosinfoSalaryOtStagging'];

		$this->render('salary/otinfo',array('model'=>$model));

	}
               public function actionUserinfo()
	{
          
                $model=new HosinfoUser('search');
                                $model->unsetAttributes();  // clear any default values
                                if(isset($_GET['HosinfoUser']))
                                        $model->attributes=$_GET['HosinfoUser'];

		$this->render('users/index',array('model'=>$model));

	}
        public function actionSalaryMonth($id)
	{
//                    $stagingid = Yii::app()->getRequest()->getQuery('stagingid');
//                    $model=new HosinfoSalarystaging('search');
//                    $model->unsetAttributes();  // clear any default values
//                    if(isset($_GET['HosinfoSalarystaging']))
//                         $model->attributes=$_GET['HosinfoSalarystaging'];
//                    $this->render('salary/salarymonth',array('model'=>$model,$stagingid));
//                    
                    $this->render('salary/salarymonth',array(
			'model'=>$this->loadModel($id),
		));
                    
	 }
    
        public function loadModel($id)
	{
		$model=HosinfoSalarystaging::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}