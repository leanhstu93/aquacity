<?php

/**
 * This is the model class for table "quangcao".
 *
 * The followings are the available columns in table 'quangcao':
 * @property integer $id
 * @property string $Name
 * @property string $UrlImage
 * @property integer $Position
 * @property string $Link
 * @property string $Description
 * @property string $Price
 * @property string $Active
 */
class Quangcao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quangcao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Position,Type,Active,idLoai, ViewCount,Date', 'numerical', 'integerOnly'=>true),
			array('Name, Alias,UrlImage, Link, Price, Active', 'length', 'max'=>255),
			array('Description,Content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name,Alias,idLoai, UrlImage,ViewCount,Date, Position, Link, Description, Price', 'safe', 'on'=>'search'),
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
			'ViewCount' => 'Lượt xem',
			'Name' => 'Tiêu đề',
			'UrlImage' => 'Hình ảnh',
			'Position' => 'Vị trí',
			'Link' => 'Link',
			'Description' => 'Mô tả',
			'Price' => 'Price',
			'Active' => 'Hiển thị',
			'Type' => 'Type',
			'Content' => 'Nội dung',
			'idLoai' => 'idLoai',
			'Date' => 'Date'
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('ViewCount',$this->ViewCount,true);
		$criteria->compare('UrlImage',$this->UrlImage,true);
		$criteria->compare('Position',$this->Position);
		$criteria->compare('Link',$this->Link,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Price',$this->Price,true);
		$criteria->compare('Active',$this->Active,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('Content',$this->Content,true);
		$criteria->compare('idLoai',$this->idLoai,true);
		$criteria->compare('Date',$this->Date,true);
		$criteria->condition = "Type = 0";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=> array('defaultOrder'=>'t.id desc')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Quangcao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
