<?php

/**
 * This is the model class for table "hosinfo_salary_ot_stagging".
 *
 * The followings are the available columns in table 'hosinfo_salary_ot_stagging':
 * @property integer $staging_id
 * @property integer $controlid
 * @property string $cid
 * @property string $officename
 * @property string $fullname
 * @property string $positoin
 * @property string $ot
 * @property string $ot_refer
 * @property string $ot_noonandnight
 * @property string $ot_or
 * @property string $ot_healthpromotion
 * @property string $ot_ems
 * @property string $ot_workload
 * @property string $ot_perhour
 * @property string $ot_stanby
 * @property string $ot_doctor_service
 * @property string $ot_dental_service
 * @property string $total
 * @property string $salarymonth
 */
class HosinfoSalaryOtStagging extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hosinfo_salary_ot_stagging';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('controlid, cid, officename, fullname, positoin, ot, ot_refer, ot_noonandnight, ot_or, ot_healthpromotion, ot_ems, ot_workload, ot_perhour, ot_stanby, ot_doctor_service, ot_dental_service, total, salarymonth', 'required'),
			array('controlid', 'numerical', 'integerOnly'=>true),
			array('cid', 'length', 'max'=>13),
			array('officename, fullname, positoin', 'length', 'max'=>100),
			array('ot, ot_refer, ot_noonandnight, ot_or, ot_healthpromotion, ot_ems, ot_workload, ot_perhour, ot_stanby, ot_doctor_service, ot_dental_service, total', 'length', 'max'=>15),
			array('salarymonth', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('staging_id, controlid, cid, officename, fullname, positoin, ot, ot_refer, ot_noonandnight, ot_or, ot_healthpromotion, ot_ems, ot_workload, ot_perhour, ot_stanby, ot_doctor_service, ot_dental_service, total, salarymonth', 'safe', 'on'=>'search'),
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
			'staging_id' => 'Staging',
			'controlid' => 'Controlid',
			'cid' => 'Cid',
			'officename' => 'Officename',
			'fullname' => 'Fullname',
			'positoin' => 'Positoin',
			'ot' => 'โอที',
			'ot_refer' => 'Refer',
			'ot_noonandnight' => 'บ่ายดึก',
			'ot_or' => 'Or',
			'ot_healthpromotion' => 'ส่งเสริม',
			'ot_ems' => 'Ems',
			'ot_workload' => 'Workload',
			'ot_perhour' => 'รายชั่วโมง',
			'ot_stanby' => 'Stanby',
			'ot_doctor_service' => 'แพทย์',
			'ot_dental_service' => 'ฑันตกรรม',
			'total' => 'ยอดรวม',
			'salarymonth' => 'Salarymonth',
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

		$criteria->compare('staging_id',$this->staging_id);
		$criteria->compare('controlid',$this->controlid);
		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('officename',$this->officename,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('positoin',$this->positoin,true);
		$criteria->compare('ot',$this->ot,true);
		$criteria->compare('ot_refer',$this->ot_refer,true);
		$criteria->compare('ot_noonandnight',$this->ot_noonandnight,true);
		$criteria->compare('ot_or',$this->ot_or,true);
		$criteria->compare('ot_healthpromotion',$this->ot_healthpromotion,true);
		$criteria->compare('ot_ems',$this->ot_ems,true);
		$criteria->compare('ot_workload',$this->ot_workload,true);
		$criteria->compare('ot_perhour',$this->ot_perhour,true);
		$criteria->compare('ot_stanby',$this->ot_stanby,true);
		$criteria->compare('ot_doctor_service',$this->ot_doctor_service,true);
		$criteria->compare('ot_dental_service',$this->ot_dental_service,true);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('salarymonth',$this->salarymonth,true);
                $criteria->addCondition('cid = "'.Yii::app()->user->name.'"');
                $criteria->order = "controlid desc";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HosinfoSalaryOtStagging the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
