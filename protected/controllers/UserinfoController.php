<?php

class UserinfoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','Usereditinfo','newuser','demo'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','ResetPwd'),
				'users'=>array('admin','3670800140248'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new HosinfoUser();
                                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                
		if(!EMPTY($_POST))
		{    
                                   $model->attributes=$_POST['HosinfoUser'];  
                                       
                                        if($model->save()) {
                                                $this->redirect(array('index'));
                                          }

                                }
                                        $this->render('create',array(
                                        'model'=>$model,
		));
                }


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HosinfoUser']))
		{
			$model->attributes=$_POST['HosinfoUser'];
                                                
			if($model->save())
				$this->redirect(array('view','id'=>$model->idcard));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $model=new HosinfoUser('search');
             $model->unsetAttributes();  // clear any default values
             if(isset($_GET['HosinfoUser']))
			$model->attributes=$_GET['HosinfoUser'];
		/*$dataProvider=new CActiveDataProvider('HosinfoUser',array(
                                              'pagination'=>array(
                                                    'pagesize'=>30,
                                                ),
                                        ));*/
		$this->render('index',array(
			'model'=>$model,
           
		));
	}

	/**
	 * Manages all models.
	 */
            public function actionGetLevel($id)
            {
            	$model=HosinfoUser::model()->findByPk($id);
                        if($model===null)
                                    throw new CHttpException(404,'The requested page does not exist.');
		return $model->level;    
            }
            public function actionNewUser()
            {
	$model=new NewuserForm;
                            if(isset($_POST['ajax']) && $_POST['ajax']==='newuser-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['HosinfoUser']))
		{
			$model->attributes=$_POST['HosinfoUser'];
			if($model->save())
			$this->render('index',array(
			'dataProvider'=>$dataProvider,
                                                ));
		}
                
                             if(isset($_POST['NewuserForm']))
		{
			$model->attributes=$_POST['NewuserForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->save())
				$this->redirect(Yii::app()->user->returnUrl);
		}
         
                                $this->render('newuser',array('model'=>$model));
                                
                }                                

            public function actionDemo()
	{
                $model=new HosinfoUser('search');
                $this->render('demoui',array(
			'model'=>$model,
		));
	}
     public function actionUsereditinfo($id)
	{
                            $model=$this->loadModel($id);
                          
                            if(isset($_POST['HosinfoUser']))
		{
                                            $model->attributes=$_POST['HosinfoUser'];
                                                        if($model->save())  {
                                                            $dataProvider=new CActiveDataProvider('HosinfoUser');
                                                                $this->render('index',array(
                                                                        'dataProvider'=>$dataProvider,));            
                                                        }
               
                                }           
                              $this->render('usereditinfo',array(
			'model'=>$model,
		));
	}
        
         public function actionResetPwd($id)
	{
		$model=$this->loadModel($id);
                                             //   $model->password=md5(substr($model->idcard, -4, 4));
                                 if(isset($_POST['HosinfoUser']))
		{
                                            $model->attributes=$_POST['HosinfoUser'];
                                            if($model->save()){
                            		$this->redirect(array('userinfo/index','model'=>$model));
                                                    }
                                        }
                                               $this->render('usereditinfo',array(
			'model'=>$model->loadModel($id),
		));
	}
	public function actionAdmin()
	{
		$model=new HosinfoUser('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HosinfoUser']))
			$model->attributes=$_GET['HosinfoUser'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return HosinfoUser the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=HosinfoUser::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param HosinfoUser $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='hosinfo-user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
