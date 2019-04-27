<?php

/**
 * This is the model class for table "sanpham".
 *
 * The followings are the available columns in table 'sanpham':
 * @property integer $id
 * @property integer $idLoai
 * @property string $UrlImage
 * @property string $HangSanXuat
 * @property string $Description
 * @property string $Keywords
 * @property string $MaSP
 * @property integer $SetHome
 * @property integer $Active
 */
class Sanpham extends CActiveRecord implements IECartPosition
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sanpham';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLoai, SetHome, Active, Gia', 'numerical', 'integerOnly'=>true),
			array('UrlImage, MaSP', 'length', 'max'=>255),
			array('HangSanXuat', 'length', 'max'=>100),
			array('Description, Keywords', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idLoai, UrlImage, HangSanXuat, Description, Keywords, MaSP, SetHome, Active', 'safe', 'on'=>'search'),
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
			'sanpham_lang' => array(self::BELONGS_TO,'SanphamLang',array('id'=>'idSP')),
			'thumbnails' => array(self::BELONGS_TO,'Thumbnails',array('id'=>'idSP')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idLoai' => 'Id Loai',
			'Gia' => 'Giá',
			'UrlImage' => 'Hình ảnh',
			'HangSanXuat' => 'Hãng sản xuất',
			'Description' => 'Description',
			'Keywords' => 'Keywords',
			'MaSP' => 'Mã sản phẩm',
			'SetHome' => 'Hiển thị trang chủ',
			'Active' => 'Hiển thị ',
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
		$criteria->with ="sanpham_lang";
		$criteria->compare('id',$this->id);
		$criteria->compare('idLoai',$this->idLoai);
		$criteria->compare('Gia',$this->Gia);
		$criteria->compare('UrlImage',$this->UrlImage,true);
		$criteria->compare('HangSanXuat',$this->HangSanXuat,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Keywords',$this->Keywords,true);
		$criteria->compare('MaSP',$this->MaSP,true);
		$criteria->compare('SetHome',$this->SetHome);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('sanpham_lang.Name',Yii::app()->request->getParam('Name'),true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		
			'pagination'=>array(
        		'pageSize'=>10,
    		),	
			'sort'=> array('defaultOrder'=>'t.id desc')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sanpham the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	function getId(){
        return $this->id;
    }

    function getPrice(){
        return $this->Gia;
    }
}
