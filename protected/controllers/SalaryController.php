<?php

class SalaryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
                public $layout='//layouts/main';
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
