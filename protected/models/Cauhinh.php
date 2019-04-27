<?php

/**
 * This is the model class for table "cauhinh".
 *
 * The followings are the available columns in table 'cauhinh':
 * @property integer $id
 * @property string $Appid
 * @property string $googlemap
 * @property string $Email
 * @property string $Title
 * @property string $Description
 * @property string $Keyword
 * @property string $head
 * @property string $body
 * @property string $footer
 * @property integer $BaoTri
 */
class Cauhinh extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cauhinh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Title', 'required'),
			array('BaoTri', 'numerical', 'integerOnly'=>true),
			array('Appid', 'length', 'max'=>100),
			array('googlemap, Email, Title', 'length', 'max'=>255),
			array('Description, Keyword, head, body, footer,ImageCompany', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Appid, googlemap, ImageCompany,Email, Title, Description, Keyword, head, body, footer, BaoTri', 'safe', 'on'=>'search'),
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
			'Appid' => 'Appid',
			'googlemap' => 'Googlemap',
			'Email' => 'Email',
			'Title' => 'Title',
			'Description' => 'Description',
			'Keyword' => 'Keyword',
			'head' => 'Head',
			'body' => 'Body',
			'footer' => 'Footer',
			'Imagecompany' => 'Hình ảnh công ty',
			'BaoTri' => 'Bao Tri',
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
		$criteria->compare('Appid',$this->Appid,true);
		$criteria->compare('googlemap',$this->googlemap,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Keyword',$this->Keyword,true);
		$criteria->compare('head',$this->head,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('footer',$this->footer,true);
		$criteria->compare('ImageCompany',$this->ImageCompany,true);
		$criteria->compare('BaoTri',$this->BaoTri);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cauhinh the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
