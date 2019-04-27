<?php

/**
 * This is the model class for table "binhluan".
 *
 * The followings are the available columns in table 'binhluan':
 * @property integer $id
 * @property integer $idBaiViet
 * @property integer $idNguoiDung
 * @property string $Content
 * @property integer $CountLike
 * @property integer $Active
 */
class Binhluan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'binhluan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idBaiViet, idNguoiDung,Parent, CountLike,CountReport, Active,Type', 'numerical', 'integerOnly'=>true),
			array('Content', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idBaiViet, idNguoiDung, Content, CountLike, Active,Type', 'safe', 'on'=>'search'),
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
			'nguoithue' => array(self::BELONGS_TO,'Nguoithue',array('idNguoiDung'=>'id')),
			'tintuc_lang' => array(self::BELONGS_TO,'TintucLang',array('idBaiViet'=>'idTinTuc')),
			'tintuc' => array(self::BELONGS_TO,'Tintuc',array('idBaiViet'=>'id')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Parent' => 'Parent',
			'idBaiViet' => 'Id Bai Viet',
			'idNguoiDung' => 'Id Nguoi Dung',
			'Content' => 'Content',
			'CountLike' => 'Count Like',
			'CountReport' => 'CountReport',
			'Active' => 'Active',
			'Type' => 'Type'
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
		$criteria->compare('idBaiViet',$this->idBaiViet);
		$criteria->compare('Parent',$this->Parent);
		$criteria->compare('idNguoiDung',$this->idNguoiDung);
		$criteria->compare('Content',$this->Content,true);
		$criteria->compare('CountLike',$this->CountLike);
		$criteria->compare('CountReport',$this->CountReport);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('Type',$this->Type);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Binhluan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
