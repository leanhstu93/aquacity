<?php

/**
 * This is the model class for table "sanpham_lang".
 *
 * The followings are the available columns in table 'sanpham_lang':
 * @property integer $id
 * @property integer $idSP
 * @property integer $idNgonNgu
 * @property string $BaoHanh
 * @property string $Name
 * @property string $Alias
 * @property string $Youtube
 * @property string $File
 * @property string $CongDung
 * @property string $CachDung
 * @property string $ChongChiDinh
 * @property string $MoTa
 * @property string $Content
 */
class SanphamLang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sanpham_lang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, Alias', 'required'),
			array('idSP, idNgonNgu', 'numerical', 'integerOnly'=>true),
			array('BaoHanh', 'length', 'max'=>50),
			array('Name, Alias, Youtube', 'length', 'max'=>255),
			array('File, CongDung, CachDung, ChongChiDinh, MoTa, Content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idSP, idNgonNgu, BaoHanh, Name, Alias, Youtube, File, CongDung, CachDung, ChongChiDinh, MoTa, Content', 'safe', 'on'=>'search'),
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
			'idSP' => 'Id Sp',
			'idNgonNgu' => 'Ngôn ngữ',
			'BaoHanh' => 'Bảo hành',
			'Name' => 'Tên sản phẩm',
			'Alias' => 'Alias',
			'Youtube' => 'Youtube',
			'File' => 'File',
			'CongDung' => 'Công dụng',
			'CachDung' => 'Cách dùng',
			'ChongChiDinh' => 'Chống chỉ định',
			'MoTa' => 'Mô tả',
			'Content' => 'Nội dung',
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
		$criteria->compare('idSP',$this->idSP);
		$criteria->compare('idNgonNgu',$this->idNgonNgu);
		$criteria->compare('BaoHanh',$this->BaoHanh,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Alias',$this->Alias,true);
		$criteria->compare('Youtube',$this->Youtube,true);
		$criteria->compare('File',$this->File,true);
		$criteria->compare('CongDung',$this->CongDung,true);
		$criteria->compare('CachDung',$this->CachDung,true);
		$criteria->compare('ChongChiDinh',$this->ChongChiDinh,true);
		$criteria->compare('MoTa',$this->MoTa,true);
		$criteria->compare('Content',$this->Content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SanphamLang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
