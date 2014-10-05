<?php
class NewuserForm extends CFormModel
{
	public $idcard,$prename,$fname,$lname,$sex,$employee_type,$birthdate;
        
        public function attributeLabels()
	{
	return array(
                         'idcard'=>'เลขบัตรประชาชน',
                         'prename'=>'คำนำหน้า',
                         'fname'=>'ชื่อ',
                         'lname'=>'สกุล',
                         'sex'=>'เพศ',
                         'employee_type'=>'ประเภท',
                         'birthdate'=>'วันเดือนปีเกิด',
                    );
	}
            
public function rules()
	{
		return array(
			array('idcard, prename,fname,lname,sex,employee_type,birthdate', 'required'),
                                                array('idcard', 'numerical', 'integerOnly'=>true),
                                                array('idcard', 'length', 'min'=>13,'max'=>13,'tooShort'=>'ต้องใส่ให้ครบ 13 หลัก',),
			array('birthdate', 'date'),
		);
	}
            public function AddNew()
	{
                    //
	}
}   