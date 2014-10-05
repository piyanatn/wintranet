<?php

/**
 * This is the model class for table "hosinfo_telephone".
 *
 * The followings are the available columns in table 'hosinfo_telephone':
 * @property integer $department_id
 * @property string $department_name
 * @property string $department_tel
 * @property string $department_mobile
 */
class HosinfoTelephone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hosinfo_telephone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department_name, department_tel', 'required'),
			array('department_name', 'length', 'max'=>100),
			array('department_tel', 'length', 'max'=>5),
			array('department_mobile', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('department_id, department_name, department_tel, department_mobile', 'safe', 'on'=>'search'),
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
			'department_id' => 'Department',
			'department_name' => 'Department Name',
			'department_tel' => 'Department Tel',
			'department_mobile' => 'Department Mobile',
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

		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('department_name',$this->department_name,true);
		$criteria->compare('department_tel',$this->department_tel,true);
		$criteria->compare('department_mobile',$this->department_mobile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HosinfoTelephone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
