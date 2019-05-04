<?php

/**
 * This is the model class for table "gioithieu".
 *
 * The followings are the available columns in table 'gioithieu':
 * @property integer $id
 * @property integer $Type
 * @property integer $Active
 */
class Gioithieu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gioithieu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Type, Active,SetMenu,SetFooter', 'numerical', 'integerOnly'=>true),
			array('UrlImage', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Type, Active,SetMenu,SetFooter', 'safe', 'on'=>'search'),
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
			'gioithieu_lang' => array(self::BELONGS_TO,'GioithieuLang',array('id'=>'idGioiThieu')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'UrlImage' => 'Hình ảnh',
			'Type' => '0: gioithieu 1: giaiphap',
			'Active' => 'Active',
			'SetFooter' =>'SetFooter',
			'SetMenu' => 'Hiển thị menu'
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
		$criteria->compare('UrlImage',$this->UrlImage);
		$criteria->compare('Type',$this->Type);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('SetMenu',$this->SetMenu);
		$criteria->compare('SetFooter',$this->SetFooter);
		$criteria->addCondition("Type = 1");
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gioithieu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
