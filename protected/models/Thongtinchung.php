<?php

/**
 * This is the model class for table "thongtinchung".
 *
 * The followings are the available columns in table 'thongtinchung':
 * @property integer $id
 * @property integer $idNgonNgu
 * @property string $Address
 * @property string $Company
 * @property string $Logo
 * @property string $Banner
 * @property string $Email
 * @property string $Fax
 * @property string $Phone
 * @property string $Tel
 * @property string $Facebook
 * @property string $Twitter
 * @property string $Google
 * @property string $Youtube
 * @property string $Pinterest
 * @property string $Tumblr
 */
class Thongtinchung extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'thongtinchung';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idNgonNgu', 'numerical', 'integerOnly'=>true),
			array('Company, Logo,Favicon, Banner, Email, Twitter, Google, Youtube, Pinterest, Tumblr', 'length', 'max'=>255),
			array('Fax, Phone, Tel', 'length', 'max'=>20),
			array('Facebook', 'length', 'max'=>100),
			array('Address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idNgonNgu, Address, Company, Logo, Banner, Email, Fax, Phone, Tel, Facebook, Twitter, Google, Youtube, Pinterest, Tumblr', 'safe', 'on'=>'search'),
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
			'idNgonNgu' => 'Id Ngon Ngu',
			'Address' => 'Address',
			'Company' => 'Company',
			'Logo' => 'Logo',
			'Favicon' => 'Favicon',
			'Banner' => 'Hình ảnh công ty',
			'Email' => 'Email',
			'Fax' => 'Fax',
			'Phone' => 'Phone',
			'Tel' => 'Tel',
			'Facebook' => 'Facebook',
			'Twitter' => 'Twitter',
			'Google' => 'Google',
			'Youtube' => 'Youtube',
			'Pinterest' => 'Pinterest',
			'Tumblr' => 'Tumblr',
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
		$criteria->compare('idNgonNgu',$this->idNgonNgu);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Company',$this->Company,true);
		$criteria->compare('Favicon',$this->Logo,true);
		$criteria->compare('Logo',$this->Logo,true);
		$criteria->compare('Banner',$this->Banner,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Fax',$this->Fax,true);
		$criteria->compare('Phone',$this->Phone,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('Facebook',$this->Facebook,true);
		$criteria->compare('Twitter',$this->Twitter,true);
		$criteria->compare('Google',$this->Google,true);
		$criteria->compare('Youtube',$this->Youtube,true);
		$criteria->compare('Pinterest',$this->Pinterest,true);
		$criteria->compare('Tumblr',$this->Tumblr,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Thongtinchung the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
