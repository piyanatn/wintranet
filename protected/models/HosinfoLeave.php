<?php

/**
 * This is the model class for table "hosinfo_leave".
 *
 * The followings are the available columns in table 'hosinfo_leave':
 * @property integer $leave_id
 * @property string $levae_type
 * @property string $leave_cid
 * @property string $leave_start
 * @property string $leave_end
 * @property integer $leave_total
 * @property integer $leave_ref1
 */
class HosinfoLeave extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hosinfo_leave';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('leave_total, leave_ref1', 'numerical', 'integerOnly'=>true),
			array('levae_type', 'length', 'max'=>255),
			array('leave_cid', 'length', 'max'=>13),
			array('leave_start, leave_end', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('leave_id, levae_type, leave_cid, leave_start, leave_end, leave_total, leave_ref1', 'safe', 'on'=>'search'),
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
			'leave_id' => 'Leave',
			'levae_type' => 'ประเภทการลา',
			'leave_cid' => 'Leave Cid',
			'leave_start' => 'วันที่ลา',
			'leave_end' => 'ถึงวันที่',
			'leave_total' => 'รวม',
			'leave_ref1' => 'Leave Ref1',
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

		$criteria->compare('leave_id',$this->leave_id);
		$criteria->compare('levae_type',$this->levae_type,true);
		$criteria->compare('leave_cid',$this->leave_cid,true);
		$criteria->compare('leave_start',$this->leave_start,true);
		$criteria->compare('leave_end',$this->leave_end,true);
		$criteria->compare('leave_total',$this->leave_total);
		$criteria->compare('leave_ref1',$this->leave_ref1);
                $criteria->addCondition('leave_cid = "'.Yii::app()->user->name.'"');
                $criteria->order = "leave_start desc";
                $criteria->addCondition('leave_start between "'.Yii::app()->KDate->getStartBudgetMySQLDate().'" and "'.Yii::app()->KDate->getEndBudgetMySQLDate().'"');
                //echo 'start '.Yii::app()->KDate->getStartBudgetMySQLDate().'  and end '.Yii::app()->KDate->getEndBudgetMySQLDate();
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HosinfoLeave the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
