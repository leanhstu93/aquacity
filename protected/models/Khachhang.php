<?php

/**
 * This is the model class for table "tintuc".
 *
 * The followings are the available columns in table 'tintuc':
 * @property integer $id
 * @property integer $idLoaiTin
 * @property string $UrlImage
 * @property string $NguoiDang
 * @property integer $Date
 * @property integer $SetHome
 * @property string $Seo_Keywords
 * @property string $Seo_Description
 * @property integer $Active
 */
class Khachhang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'khachhang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLoaiKhachHang, Date, SetHome, Active', 'numerical', 'integerOnly'=>true),
			array('UrlImage, NguoiDang', 'length', 'max'=>255),
			array('Seo_Keywords, Seo_Description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idLoaiKhachHang, UrlImage, NguoiDang, Date, SetHome, Seo_Keywords, Seo_Description, Active', 'safe', 'on'=>'search'),
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
			'khachhang_lang' => array(self::BELONGS_TO,'KhachhangLang',array('id'=>'idKhachHang')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idLoaiKhachHang' => 'Id loại khách hàng',
			'UrlImage' => 'Hình ảnh',
			'NguoiDang' => 'Nguoi Dang',
			'Date' => 'Date',
			'SetHome' => 'Hiển thị trang chủ',
			'Seo_Keywords' => 'Seo Keywords',
			'Seo_Description' => 'Seo Description',
			'Active' => 'Hiển thị',
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
		$criteria->compare('idLoaiKhachHang',$this->idLoaiKhachHang);
		$criteria->compare('UrlImage',$this->UrlImage,true);
		$criteria->compare('NguoiDang',$this->NguoiDang,true);
		$criteria->compare('Date',$this->Date);
		$criteria->compare('SetHome',$this->SetHome);
		$criteria->compare('Seo_Keywords',$this->Seo_Keywords,true);
		$criteria->compare('Seo_Description',$this->Seo_Description,true);
		$criteria->compare('Active',$this->Active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=> array('defaultOrder'=>'t.id desc')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tintuc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
