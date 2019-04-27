<?php

/**
 * This is the model class for table "nncms_donhang".
 *
 * The followings are the available columns in table 'nncms_donhang':
 * @property integer $idDH
 * @property integer $idNguoiDung
 * @property string $ThoiGianDat
 * @property string $TenNguoiNhan
 * @property string $DiaDiemGiao
 * @property string $GhiChu
 * @property integer $TinhTrang
 */
class NncmsDonhang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nncms_donhang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idNguoiDung, ThoiGianDat, TenNguoiNhan, DiaDiemGiao, TinhTrang', 'required'),
			array('idNguoiDung, TinhTrang, ThoiGianDat', 'numerical', 'integerOnly'=>true),
			array('TenNguoiNhan', 'length', 'max'=>100),
			array('DiaDiemGiao, GhiChu, DienThoai', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idDH, idNguoiDung, ThoiGianDat, TenNguoiNhan, DiaDiemGiao, GhiChu, TinhTrang, DienThoai', 'safe', 'on'=>'search'),
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
			'nncms_donhangchitiet' => array(self::BELONGS_TO,'NncmsDonhangchitiet',array('idDH'=>'idDH')),
			'nncms_nguoidung' => array(self::BELONGS_TO,'NncmsNguoidung',array('idNguoiDung'=>'idNguoiDung')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idDH' => 'IdDh',
			'idNguoiDung' => 'Id Nguoi Dung',
			'ThoiGianDat' => 'Thời gian đặt',
			'TenNguoiNhan' => 'Tên người nhận',
			'DiaDiemGiao' => 'Địa điểm giao',
			'GhiChu' => 'Ghi chú',
			'TinhTrang' => 'Tình trạng',
			'DienThoai' => 'Điện thoại'
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
		$criteria->with ="nncms_nguoidung";
		$criteria->compare('idDH',$this->idDH);
		$criteria->compare('idNguoiDung',$this->idNguoiDung);
		$criteria->compare('ThoiGianDat',$this->ThoiGianDat,true);
		$criteria->compare('TenNguoiNhan',$this->TenNguoiNhan,true);
		$criteria->compare('DiaDiemGiao',$this->DiaDiemGiao,true);
		$criteria->compare('DienThoai',$this->DienThoai,true);
		$criteria->compare('GhiChu',$this->GhiChu);
		$criteria->compare('TinhTrang',$this->TinhTrang);
		$criteria->compare('nncms_nguoidung.DienThoai',Yii::app()->request->getParam('DienThoai'),true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=> array('defaultOrder'=>'idDH desc')
		));
	}
	public function getTinhTrang($state){
		switch ($state) {
		    case 0:
		       echo "<span style='color:#929201'>Chưa xử lý</span>";
		       break;
		    case 1:
		        echo "<span style='color:#399bff'>Đang xử lý</span>";
		        break;
		    case 2:
		    	echo "<span style='color:green'>Hoàn tất</span>";
		    	break;
		    default:
		        echo "<span style='color:red'>Hủy</span>";
		        break;
		}
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NncmsDonhang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
