<?php

/**
 * This is the model class for table "quantri".
 *
 * The followings are the available columns in table 'quantri':
 * @property integer $id
 * @property integer $idRole
 * @property string $TaiKhoan
 * @property string $MatKhau
 * @property string $HoTen
 * @property integer $GioiTinh
 * @property string $NgaySinh
 * @property string $Email
 * @property string $CMND
 * @property string $SDT
 * @property string $DiaChi
 * @property integer $NgayDangKy
 * @property integer $Active
 */
class Quantri extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quantri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idRole, TaiKhoan, MatKhau, HoTen', 'required'),
			array('idRole, GioiTinh, NgayDangKy, Active', 'numerical', 'integerOnly'=>true),
			array('TaiKhoan', 'length', 'max'=>20),
			array('MatKhau, DiaChi', 'length', 'max'=>100),
			array('HoTen', 'length', 'max'=>30),
			array('NgaySinh, SDT', 'length', 'max'=>12),
			array('Email', 'length', 'max'=>50),
			array('CMND', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idRole, TaiKhoan, MatKhau, HoTen, GioiTinh, NgaySinh, Email, CMND, SDT, DiaChi, NgayDangKy, Active', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'idRole' => 'Id Role',
			'TaiKhoan' => 'Tài khoản',
			'MatKhau' => 'Mat Khau',
			'HoTen' => 'Họ tên',
			'GioiTinh' => 'Gioi Tinh',
			'NgaySinh' => 'Ngay Sinh',
			'Email' => 'Email',
			'CMND' => 'Cmnd',
			'SDT' => 'Sdt',
			'DiaChi' => 'Dia Chi',
			'NgayDangKy' => 'Ngày đăng ký',
			'Active' => 'Active',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('idRole',$this->idRole);
		$criteria->compare('TaiKhoan',$this->TaiKhoan,true);
		$criteria->compare('MatKhau',$this->MatKhau,true);
		$criteria->compare('HoTen',$this->HoTen,true);
		$criteria->compare('GioiTinh',$this->GioiTinh);
		$criteria->compare('NgaySinh',$this->NgaySinh,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('CMND',$this->CMND,true);
		$criteria->compare('SDT',$this->SDT,true);
		$criteria->compare('DiaChi',$this->DiaChi,true);
		$criteria->compare('NgayDangKy',$this->NgayDangKy);
		$criteria->compare('Active',$this->Active);
		$iduser = Yii::app()->user->getState('iduser');
		$criteria->addCondition("id != 4 and id != ".$iduser);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Quantri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
