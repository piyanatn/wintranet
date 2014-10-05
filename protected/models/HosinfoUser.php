<?php

/**
 * This is the model class for table "hosinfo_user".
 *
 * The followings are the available columns in table 'hosinfo_user':
 * @property string $idcard
 * @property string $hn
 * @property string $fullname
 * @property string $fname
 * @property string $lname
 * @property string $password
 * @property string $emptype
 * @property integer $activate
 * @property string $submitcount
 * @property string $title
 * @property integer $department
 * @property string $tel
 * @property string $mobile
 * @property string $startdate
 * @property string $birthdate
 * @property integer $sex
 * @property string $position
 * @property string $start_gov_officer
 * @property integer $emp_status
 * @property integer $dep_group
 * @property string $updatedby
 * @property string $lastupdated
 * @property integer $resign
 * @property string $resigndate
 * @property string $access_carbooking
 * @property integer $access_carbooking_permission
 * @property string $addrpart
 * @property string $moopart
 * @property string $tmbpart
 * @property string $amppart
 * @property string $chwpart
 * @property string $road
 * @property string $po_code
 * @property string $father_name
 * @property string $father_cid
 * @property string $mother_name
 * @property string $mother_cid
 * @property string $married_name
 * @property string $married_cid
 * @property string $education_remark
 * @property integer $education
 * @property integer $salary
 * @property integer $rank
 * @property string $gov_no
 * @property integer $emp_no
 * @property string $emp_image
 * @property integer $level
 */
class HosinfoUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hosinfo_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcard, title,fname,lname,sex,emptype,birthdate', 'required'),
                                                array('idcard', 'numerical', 'integerOnly'=>true),
                                                array('birthdate', 'date'),        
			array('activate, department, sex, emp_status, dep_group, resign, access_carbooking_permission, education, salary, rank, emp_no, level', 'numerical', 'integerOnly'=>true),
			array('idcard, updatedby, father_cid, mother_cid, married_cid', 'length', 'min'=>13, 'max'=>13,'tooShort'=>'ต้องใส่ให้ครบ 13 หลัก',),
			array('hn', 'length', 'max'=>7),
			array('fullname, password', 'length', 'max'=>100),
			array('fname, lname', 'length', 'max'=>40),
			array('emptype, title, addrpart, road, gov_no', 'length', 'max'=>50),
			array('submitcount, tel, mobile', 'length', 'max'=>20),
			array('position', 'length', 'max'=>200),
			array('access_carbooking', 'length', 'max'=>1),
			array('moopart', 'length', 'max'=>3),
			array('tmbpart, amppart, chwpart', 'length', 'max'=>2),
			array('po_code', 'length', 'max'=>5),
			array('father_name, mother_name, married_name', 'length', 'max'=>80),
			array('education_remark', 'length', 'max'=>150),
			array('startdate, birthdate, start_gov_officer, lastupdated, resigndate, emp_image', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcard, hn, fullname, fname, lname, password, emptype, activate, submitcount, title, department, tel, mobile, startdate, birthdate, sex, position, start_gov_officer, emp_status, dep_group, updatedby, lastupdated, resign, resigndate, access_carbooking, access_carbooking_permission, addrpart, moopart, tmbpart, amppart, chwpart, road, po_code, father_name, father_cid, mother_name, mother_cid, married_name, married_cid, education_remark, education, salary, rank, gov_no, emp_no, emp_image, level', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcard' => 'Idcard',
			'hn' => 'Hn',
			'fullname' => 'Fullname',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'password' => 'Password',
			'emptype' => 'Emptype',
			'activate' => 'Activate',
			'submitcount' => 'Submitcount',
			'title' => 'Title',
			'department' => 'Department',
			'tel' => 'Tel',
			'mobile' => 'Mobile',
			'startdate' => 'Startdate',
			'birthdate' => 'วันเกิด',
			'sex' => 'Sex',
			'position' => 'Position',
			'start_gov_officer' => 'Start Gov Officer',
			'emp_status' => 'Emp Status',
			'dep_group' => 'Dep Group',
			'updatedby' => 'Updatedby',
			'lastupdated' => 'Lastupdated',
			'resign' => 'Resign',
			'resigndate' => 'Resigndate',
			'access_carbooking' => 'Access Carbooking',
			'access_carbooking_permission' => 'Access Carbooking Permission',
			'addrpart' => 'Addrpart',
			'moopart' => 'Moopart',
			'tmbpart' => 'Tmbpart',
			'amppart' => 'Amppart',
			'chwpart' => 'Chwpart',
			'road' => 'Road',
			'po_code' => 'Po Code',
			'father_name' => 'Father Name',
			'father_cid' => 'Father Cid',
			'mother_name' => 'Mother Name',
			'mother_cid' => 'Mother Cid',
			'married_name' => 'Married Name',
			'married_cid' => 'Married Cid',
			'education_remark' => 'Education Remark',
			'education' => 'Education',
			'salary' => 'Salary',
			'rank' => 'Rank',
			'gov_no' => 'Gov No',
			'emp_no' => 'Emp No',
			'emp_image' => 'Emp Image',
			'level' => 'Level',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idcard',$this->idcard,true);
		$criteria->compare('hn',$this->hn,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('emptype',$this->emptype,true);
		$criteria->compare('activate',$this->activate);
		$criteria->compare('submitcount',$this->submitcount,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('department',$this->department);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('start_gov_officer',$this->start_gov_officer,true);
		$criteria->compare('emp_status',$this->emp_status);
		$criteria->compare('dep_group',$this->dep_group);
		$criteria->compare('updatedby',$this->updatedby,true);
		$criteria->compare('lastupdated',$this->lastupdated,true);
		$criteria->compare('resign',$this->resign);
		$criteria->compare('resigndate',$this->resigndate,true);
		$criteria->compare('access_carbooking',$this->access_carbooking,true);
		$criteria->compare('access_carbooking_permission',$this->access_carbooking_permission);
		$criteria->compare('addrpart',$this->addrpart,true);
		$criteria->compare('moopart',$this->moopart,true);
		$criteria->compare('tmbpart',$this->tmbpart,true);
		$criteria->compare('amppart',$this->amppart,true);
		$criteria->compare('chwpart',$this->chwpart,true);
		$criteria->compare('road',$this->road,true);
		$criteria->compare('po_code',$this->po_code,true);
		$criteria->compare('father_name',$this->father_name,true);
		$criteria->compare('father_cid',$this->father_cid,true);
		$criteria->compare('mother_name',$this->mother_name,true);
		$criteria->compare('mother_cid',$this->mother_cid,true);
		$criteria->compare('married_name',$this->married_name,true);
		$criteria->compare('married_cid',$this->married_cid,true);
		$criteria->compare('education_remark',$this->education_remark,true);
		$criteria->compare('education',$this->education);
		$criteria->compare('salary',$this->salary);
		$criteria->compare('rank',$this->rank);
		$criteria->compare('gov_no',$this->gov_no,true);
		$criteria->compare('emp_no',$this->emp_no);
		$criteria->compare('emp_image',$this->emp_image,true);
		$criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HosinfoUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
           public function validatePassword($password) 
                {
                        return md5($password) === $this->password;
                } 
                public function Get_Level()
                {
                   return $this->level;
                }
                
                public function beforeSave() {
                    if ($this->isNewRecord)
                        {
                            $arr = explode("/",$this->birthdate);
                            $this->birthdate =$arr[2].'-'.$arr[0].'-'.$arr[1];
                            $this->password = md5(substr($this->idcard, -4, 4));
                            $this->fullname = $this->fname.' '.$this->lname;
                        }
                    return parent::beforeSave();
                }    
                
                public function ResetPwd($model) {
                    $model->password = md5(substr($this->idcard, -4, 4));
                   
                }   

                public function getButtonActiveRequest($data, $row) {
                    if ($data->request_status != "wait") {
                        return "";
                    } else {
                        $img = CHtml::image("images/edit.png");
                        return $img;
                    }
                 }
}
