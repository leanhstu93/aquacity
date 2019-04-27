<?php

/**
 * This is the model class for table "video".
 *
 * The followings are the available columns in table 'video':
 * @property integer $id
 * @property string $Name
 * @property string $Alias
 * @property string $Link
 * @property string $UrlImage
 * @property string $Description
 * @property string $SetHome
 * @property integer $Active
 */
class Video extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'video';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Active,Footer,Date', 'numerical', 'integerOnly'=>true),
			array('Name, Alias, Link, UrlImage', 'length', 'max'=>255),
			array('Description, SetHome', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, Footer,Alias, Link, UrlImage, Description,Date, SetHome, Active', 'safe', 'on'=>'search'),
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
			'video_lang' => array(self::BELONGS_TO,'VideoLang',array('id'=>'idVideo')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Name' => 'Tiêu đề',
			'Alias' => 'Alias',
			'Link' => 'Source',
			'UrlImage' => 'Url Image',
			'Description' => 'Mô tả',
			'SetHome' => 'Nổi bật',
			'Footer' => 'Footer',
			'Active' => 'Hiển thị',
			'HinhAnh' => 'Hình ảnh',	
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
		$criteria->compare('Alias',$this->Alias,true);
		$criteria->compare('Link',$this->Link,true);
		$criteria->compare('UrlImage',$this->UrlImage,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('SetHome',$this->SetHome,true);
		$criteria->compare('Footer',$this->Footer,true);
		$criteria->compare('Date',$this->Date,true);
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
	 * @return Video the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
