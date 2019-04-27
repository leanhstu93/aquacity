<?php

/**
 * This is the model class for table "loaisanpham".
 *
 * The followings are the available columns in table 'loaisanpham':
 * @property integer $id
 * @property integer $Parent
 * @property integer $SetHome
 * @property integer $Active
 */
class Loaisanpham extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'loaisanpham';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Parent, SetHome, Active, Order', 'numerical', 'integerOnly'=>true),
			array('UrlImage', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Parent, SetHome, Active,Order', 'safe', 'on'=>'search'),
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
			'loaisanpham_lang' => array(self::BELONGS_TO,'LoaisanphamLang',array('id'=>'idLoai')),
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
			'Parent' => 'Parent',
			'SetHome' => 'Set Home',
			'Active' => 'Hiển thị',
			'Order' => 'Thứ tự',
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
		$criteria->with =array('loaisanpham_lang');
		$criteria->compare('id',$this->id);
		$criteria->compare('UrlImage',$this->UrlImage);
		$criteria->compare('Parent',$this->Parent);
		$criteria->compare('SetHome',$this->SetHome);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('Order',$this->Order);
		$criteria->compare('loaisanpham_lang.Name',Yii::app()->request->getParam('Name'),true);
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
	 * @return Loaisanpham the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
