<?php

/**
 * This is the model class for table "hosinfo_salarystaging".
 *
 * The followings are the available columns in table 'hosinfo_salarystaging':
 * @property integer $stagingid
 * @property string $idcard
 * @property string $fullname
 * @property string $employeetype
 * @property string $salary
 * @property string $controlid
 * @property string $positionsalary
 * @property string $tobtan
 * @property string $vat
 * @property string $chorkorsor
 * @property string $chorkorsorjorwar
 * @property string $chorkorsorkracoung
 * @property string $korborkhor
 * @property string $korsorjaw
 * @property string $sahakorn
 * @property string $oomsin
 * @property string $aia
 * @property string $store
 * @property string $erictric
 * @property string $aia123
 * @property string $torousor
 * @property string $oceanlifeinsurance
 * @property string $other
 * @property string $totalamount
 * @property string $portorsorbudget
 * @property string $portorsorbumrung
 * @property string $nothaveclinic
 * @property string $doctorpostpaid
 * @property string $karraksapayaban
 * @property string $childeducationbudget
 * @property string $bonusghorepormore
 * @property string $tokburgother
 * @property string $other2
 * @property string $other3
 * @property string $ot
 * @property string $moneytemkhan
 * @property string $kharwichachive
 * @property string $kharklongchive
 * @property string $tokburg
 * @property string $socialinsure
 * @property string $gorsorjaw
 * @property string $sorsorjaw
 * @property string $aia2
 * @property string $aia3
 * @property string $library
 * @property string $positionname
 * @property string $salarymonth
 * @property string $lifeinsure
 * @property string $bonus
 * @property string $ghbbank
 * @property string $oomsinjor
 * @property string $korborkhortokburg
 * @property string $korsorjawtokburg
 * @property string $receiveother
 * @property string $dedugother
 */
class HosinfoSalarystaging extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hosinfo_salarystaging';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                                                array('stagingid', 'required'),
			array('idcard', 'length', 'max'=>13),
			array('fullname', 'length', 'max'=>200),
			array('employeetype, salarymonth', 'length', 'max'=>100),
			array('salary, positionsalary, tobtan, vat, chorkorsor, chorkorsorjorwar, chorkorsorkracoung, korborkhor, korsorjaw, sahakorn, oomsin, aia, store, erictric, aia123, torousor, oceanlifeinsurance, other, totalamount, portorsorbudget, portorsorbumrung, nothaveclinic, doctorpostpaid, karraksapayaban, childeducationbudget, bonusghorepormore, tokburgother, other2, other3, ot, moneytemkhan, kharwichachive, kharklongchive, tokburg, socialinsure, gorsorjaw, sorsorjaw, aia2, aia3, library, lifeinsure, bonus, ghbbank, oomsinjor, korborkhortokburg, korsorjawtokburg, receiveother, dedugother', 'length', 'max'=>10),
			array('controlid', 'length', 'max'=>20),
			array('positionname', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('stagingid, idcard, fullname, employeetype, salary, controlid, positionsalary, tobtan, vat, chorkorsor, chorkorsorjorwar, chorkorsorkracoung, korborkhor, korsorjaw, sahakorn, oomsin, aia, store, erictric, aia123, torousor, oceanlifeinsurance, other, totalamount, portorsorbudget, portorsorbumrung, nothaveclinic, doctorpostpaid, karraksapayaban, childeducationbudget, bonusghorepormore, tokburgother, other2, other3, ot, moneytemkhan, kharwichachive, kharklongchive, tokburg, socialinsure, gorsorjaw, sorsorjaw, aia2, aia3, library, positionname, salarymonth, lifeinsure, bonus, ghbbank, oomsinjor, korborkhortokburg, korsorjawtokburg, receiveother, dedugother', 'safe', 'on'=>'search'),
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
                                    "R_HosinfoSalaryfilecontrol" => array(self::HAS_ONE,"HosinfoSalaryfilecontrol",array("controlid"=>"controlid")),
                                    "R_HosinfoUser" => array(self::HAS_ONE,"HosinfoUser",array("idcard"=>"idcard")),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'stagingid' => 'Stagingid',
			'idcard' => 'บัตรประชาชน',
			'fullname' => 'ชื่อ-สกุล',
			'employeetype' => 'ประเภคของพนักงาน',
			'salary' => 'เงินเดือน',
			'controlid' => 'Controlid',
			'positionsalary' => 'เงินประจำตำแหน่ง',
			'tobtan' => 'ตอบแทน',
			'vat' => 'ภาษี',
			'chorkorsor' => 'ฌกส.',
			'chorkorsorjorwar' => 'ฌกส จว',
			'chorkorsorkracoung' => 'ฌกส. กระทรวง',
			'korborkhor' => 'กบข',
			'korsorjaw' => 'กสจ',
			'sahakorn' => 'สหกรณ์',
			'oomsin' => 'ออมสิน',
			'aia' => 'AIA',
			'store' => 'ร้านค้า',
			'erictric' => 'ไฟฟ้า',
			'aia123' => 'AIA 1+2+3',
			'torousor' => 'ธนาคารอาคารสงเคราะห์',
			'oceanlifeinsurance' => 'ไทยสมุทร',
			'other' => 'อื่นๆ',
			'totalamount' => 'จำนวนเงินสุทธิ',
			'portorsorbudget' => 'พตส.งบประมาณ',
			'portorsorbumrung' => 'พตส.บำรุง',
			'nothaveclinic' => 'ไม่ทำคลีนิค',
			'doctorpostpaid' => 'เหมาจ่ายแพทย์',
			'karraksapayaban' => 'ค่ารักษาพยาบาล',
			'childeducationbudget' => 'ค่าเล่าเรียนบุตร',
			'bonusghorepormore' => 'โบนัสงปม',
			'tokburgother' => 'ตกเบิกอื่นๆ',
			'other2' => 'อื่นๆ2',
			'other3' => 'อื่นๆ3',
			'ot' => 'ค่าตอบแทน OT',
			'moneytemkhan' => 'เงินเต็มขั้น',
			'kharwichachive' => 'ค่าวิชาชีพ',
			'kharklongchive' => 'ค่าครองชีพ',
			'tokburg' => 'ตกเบิก',
			'socialinsure' => 'ประกันสังคม',
			'gorsorjaw' => 'กสจ',
			'sorsorjaw' => 'สสจ',
			'aia2' => 'AIA2',
			'aia3' => 'AIA3',
			'library' => 'ห้องสมุด',
			'positionname' => 'ตำแหน่ง',
			'salarymonth' => 'เดือนที่บันทึก',
			'lifeinsure' => 'ประกันชีวิต',
			'bonus' => 'โบนัส',
			'ghbbank' => 'ธนาคารอาคารสงเคราะห์',
			'oomsinjor' => 'ออมสิน',
			'korborkhortokburg' => 'กบขตกเบิก',
			'korsorjawtokburg' => 'คสจตกเบิก',
			'receiveother' => 'รับอื่นๆ',
			'dedugother' => 'หักอื่นๆ',
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

		$criteria->compare('stagingid',$this->stagingid);
		$criteria->compare('idcard',$this->idcard,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('employeetype',$this->employeetype,true);
		$criteria->compare('salary',$this->salary,true);
		$criteria->compare('controlid',$this->controlid,true);
		$criteria->compare('positionsalary',$this->positionsalary,true);
		$criteria->compare('tobtan',$this->tobtan,true);
		$criteria->compare('vat',$this->vat,true);
		$criteria->compare('chorkorsor',$this->chorkorsor,true);
		$criteria->compare('chorkorsorjorwar',$this->chorkorsorjorwar,true);
		$criteria->compare('chorkorsorkracoung',$this->chorkorsorkracoung,true);
		$criteria->compare('korborkhor',$this->korborkhor,true);
		$criteria->compare('korsorjaw',$this->korsorjaw,true);
		$criteria->compare('sahakorn',$this->sahakorn,true);
		$criteria->compare('oomsin',$this->oomsin,true);
		$criteria->compare('aia',$this->aia,true);
		$criteria->compare('store',$this->store,true);
		$criteria->compare('erictric',$this->erictric,true);
		$criteria->compare('aia123',$this->aia123,true);
		$criteria->compare('torousor',$this->torousor,true);
		$criteria->compare('oceanlifeinsurance',$this->oceanlifeinsurance,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('totalamount',$this->totalamount,true);
		$criteria->compare('portorsorbudget',$this->portorsorbudget,true);
		$criteria->compare('portorsorbumrung',$this->portorsorbumrung,true);
		$criteria->compare('nothaveclinic',$this->nothaveclinic,true);
		$criteria->compare('doctorpostpaid',$this->doctorpostpaid,true);
		$criteria->compare('karraksapayaban',$this->karraksapayaban,true);
		$criteria->compare('childeducationbudget',$this->childeducationbudget,true);
		$criteria->compare('bonusghorepormore',$this->bonusghorepormore,true);
		$criteria->compare('tokburgother',$this->tokburgother,true);
		$criteria->compare('other2',$this->other2,true);
		$criteria->compare('other3',$this->other3,true);
		$criteria->compare('ot',$this->ot,true);
		$criteria->compare('moneytemkhan',$this->moneytemkhan,true);
		$criteria->compare('kharwichachive',$this->kharwichachive,true);
		$criteria->compare('kharklongchive',$this->kharklongchive,true);
		$criteria->compare('tokburg',$this->tokburg,true);
		$criteria->compare('socialinsure',$this->socialinsure,true);
		$criteria->compare('gorsorjaw',$this->gorsorjaw,true);
		$criteria->compare('sorsorjaw',$this->sorsorjaw,true);
		$criteria->compare('aia2',$this->aia2,true);
		$criteria->compare('aia3',$this->aia3,true);
		$criteria->compare('library',$this->library,true);
		$criteria->compare('positionname',$this->positionname,true);
		$criteria->compare('salarymonth',$this->salarymonth,true);
		$criteria->compare('lifeinsure',$this->lifeinsure,true);
		$criteria->compare('bonus',$this->bonus,true);
		$criteria->compare('ghbbank',$this->ghbbank,true);
		$criteria->compare('oomsinjor',$this->oomsinjor,true);
		$criteria->compare('korborkhortokburg',$this->korborkhortokburg,true);
		$criteria->compare('korsorjawtokburg',$this->korsorjawtokburg,true);
		$criteria->compare('receiveother',$this->receiveother,true);
		$criteria->compare('dedugother',$this->dedugother,true);
                $criteria->addCondition('idcard = "'.Yii::app()->user->name.'"');
                $criteria->order = "stagingid desc";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HosinfoSalarystaging the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
