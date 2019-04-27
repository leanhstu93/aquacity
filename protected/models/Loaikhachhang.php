<?php

/**
 * This is the model class for table "loaitin".
 *
 * The followings are the available columns in table 'loaitin':
 * @property integer $id
 * @property integer $Parent
 * @property integer $SetMenu
 * @property integer $SetHome
 * @property integer $Active
 */
class Loaikhachhang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'loaikhachhang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Parent, SetMenu, SetHome, Active', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Parent, SetMenu, SetHome, Active', 'safe', 'on'=>'search'),
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
			'loaikhachhang_lang' => array(self::BELONGS_TO,'LoaikhachhangLang',array('id'=>'idLoaiKhachHang')),
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
			'SetMenu' => 'Set Menu',
			'SetHome' => 'Set Home',
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
		$criteria->with =array('loaikhachhang_lang');
		$criteria->compare('id',$this->id);
		$criteria->compare('Parent',$this->Parent);
		$criteria->compare('SetMenu',$this->SetMenu);
		$criteria->compare('SetHome',$this->SetHome);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('loaikhachhang_lang.Name',Yii::app()->request->getParam('Name'),true);
		$criteria->addCondition("idNgonNgu = 1");
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			 'sort'=> array('defaultOrder'=>'t.id desc')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Loaitin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
