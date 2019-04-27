<?php

/**
 * This is the model class for table "loaisanpham_lang".
 *
 * The followings are the available columns in table 'loaisanpham_lang':
 * @property integer $id
 * @property integer $idLoai
 * @property integer $idNgonNgu
 * @property string $Name
 * @property string $Alias
 * @property integer $SetMenu
 */
class LoaisanphamLang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'loaisanpham_lang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLoai, idNgonNgu, Name, Alias', 'required'),
			array('idLoai, idNgonNgu, SetMenu', 'numerical', 'integerOnly'=>true),
			array('Name, Alias', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idLoai, idNgonNgu, Name, Alias, SetMenu', 'safe', 'on'=>'search'),
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
			'idLoai' => 'Id Loai',
			'idNgonNgu' => 'Id Ngon Ngu',
			'Name' => 'Tên loại',
			'Alias' => 'Alias',
			'SetMenu' => 'Set Menu',
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
		$criteria->compare('idLoai',$this->idLoai);
		$criteria->compare('idNgonNgu',$this->idNgonNgu);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Alias',$this->Alias,true);
		$criteria->compare('SetMenu',$this->SetMenu);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LoaisanphamLang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
