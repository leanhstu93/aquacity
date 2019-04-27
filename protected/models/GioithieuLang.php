<?php

/**
 * This is the model class for table "gioithieu_lang".
 *
 * The followings are the available columns in table 'gioithieu_lang':
 * @property integer $id
 * @property integer $idGioiThieu
 * @property integer $idNgonNgu
 * @property string $Name
 * @property string $Alias
 * @property string $Description
 * @property string $Content
 */
class GioithieuLang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gioithieu_lang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idGioiThieu, idNgonNgu', 'numerical', 'integerOnly'=>true),
			array('Name, Alias', 'length', 'max'=>255),
			array('Description, Content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idGioiThieu, idNgonNgu, Name, Alias, Description, Content', 'safe', 'on'=>'search'),
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
			'idGioiThieu' => 'Id Gioi Thieu',
			'idNgonNgu' => 'Id Ngon Ngu',
			'Name' => 'Tiêu đề',
			'Alias' => 'Alias',
			'Description' => 'Description',
			'Content' => 'Content',
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
		$criteria->compare('idGioiThieu',$this->idGioiThieu);
		$criteria->compare('idNgonNgu',$this->idNgonNgu);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Alias',$this->Alias,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Content',$this->Content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GioithieuLang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
