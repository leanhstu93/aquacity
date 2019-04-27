<?php

/**
 * This is the model class for table "nncms_nguoidung".
 *
 * The followings are the available columns in table 'nncms_nguoidung':
 * @property integer $idNguoiDung
 * @property string $TenTaiKhoan
 * @property string $MatKhau
 * @property string $Email
 * @property string $HoTen
 * @property string $DienThoai
 * @property string $DiaChi
 * @property string $NgaySinh
 * @property integer $GioiTinh
 * @property string $NgayDangKy
 * @property integer $idNhom
 * @property integer $KichHoat
 * @property string $MaNgauNhien
 * @property integer $DiemSMS
 */
class NncmsNguoidung extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nncms_nguoidung';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Email, HoTen, DienThoai, NgayDangKy', 'required'),
			array('GioiTinh, idNhom, KichHoat, DiemSMS,NgayDangKy', 'numerical', 'integerOnly'=>true),
			array('TenTaiKhoan, MatKhau, Email, MaNgauNhien', 'length', 'max'=>255),
			array('HoTen, DienThoai', 'length', 'max'=>100),
			array('DiaChi', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idNguoiDung, TenTaiKhoan, MatKhau, Email, HoTen, DienThoai, DiaChi, NgaySinh, GioiTinh, NgayDangKy, idNhom, KichHoat, MaNgauNhien, DiemSMS', 'safe', 'on'=>'search'),
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
			'idNguoiDung' => 'Id Nguoi Dung',
			'TenTaiKhoan' => 'Ten Tai Khoan',
			'MatKhau' => 'Mat Khau',
			'Email' => 'Email',
			'HoTen' => 'Ho Ten',
			'DienThoai' => 'Điện thoại ',
			'DiaChi' => 'Dia Chi',
			'NgaySinh' => 'Ngay Sinh',
			'GioiTinh' => 'Gioi Tinh',
			'NgayDangKy' => 'Ngay Dang Ky',
			'idNhom' => 'Id Nhom',
			'KichHoat' => 'Kich Hoat',
			'MaNgauNhien' => 'Ma Ngau Nhien',
			'DiemSMS' => 'Diem Sms',
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

		$criteria->compare('idNguoiDung',$this->idNguoiDung);
		$criteria->compare('TenTaiKhoan',$this->TenTaiKhoan,true);
		$criteria->compare('MatKhau',$this->MatKhau,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('HoTen',$this->HoTen,true);
		$criteria->compare('DienThoai',$this->DienThoai,true);
		$criteria->compare('DiaChi',$this->DiaChi,true);
		$criteria->compare('NgaySinh',$this->NgaySinh,true);
		$criteria->compare('GioiTinh',$this->GioiTinh);
		$criteria->compare('NgayDangKy',$this->NgayDangKy,true);
		$criteria->compare('idNhom',$this->idNhom);
		$criteria->compare('KichHoat',$this->KichHoat);
		$criteria->compare('MaNgauNhien',$this->MaNgauNhien,true);
		$criteria->compare('DiemSMS',$this->DiemSMS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NncmsNguoidung the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
