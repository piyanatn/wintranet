<?php

/**
 * This is the model class for table "hosinfo_salaryfilecontrol".
 *
 * The followings are the available columns in table 'hosinfo_salaryfilecontrol':
 * @property string $controlid
 * @property string $excelfile
 * @property string $uploaddatetime
 * @property string $userlogin
 * @property string $uploadmonth
 * @property integer $totalrecord
 */
class HosinfoSalaryfilecontrol extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hosinfo_salaryfilecontrol';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('excelfile, uploaddatetime, uploadmonth', 'required'),
			array('totalrecord', 'numerical', 'integerOnly'=>true),
			array('userlogin, uploadmonth', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('controlid, excelfile, uploaddatetime, userlogin, uploadmonth, totalrecord', 'safe', 'on'=>'search'),
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
                                      // "R_HosinfoSalarystaging" => array(self::HAS_ONE,"HosinfoSalarystaging",array("controlid"=>"controlid")),
                                       //"R_Hospitalcode" => array(self::BELONGS_TO,"Hospcode","hospcode"),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'controlid' => 'Controlid',
			'excelfile' => 'Excelfile',
			'uploaddatetime' => 'วันที่ Update',
			'userlogin' => 'Userlogin',
			'uploadmonth' => 'เดือน',
			'totalrecord' => 'Totalrecord',
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

		$criteria->compare('controlid',$this->controlid,true);
		$criteria->compare('excelfile',$this->excelfile,true);
		$criteria->compare('uploaddatetime',$this->uploaddatetime,true);
		$criteria->compare('userlogin',$this->userlogin,true);
		$criteria->compare('uploadmonth',$this->uploadmonth,true);
		$criteria->compare('totalrecord',$this->totalrecord);
                $criteria->order = "uploaddatetime desc";

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HosinfoSalaryfilecontrol the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
