<?php

/**
 * This is the model class for table "tintuc_lang".
 *
 * The followings are the available columns in table 'tintuc_lang':
 * @property integer $id
 * @property integer $idNgonNgu
 * @property integer $idTinTuc
 * @property string $Name
 * @property string $Alias
 * @property string $Description
 * @property string $Content
 */
class TintucLang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tintuc_lang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idNgonNgu, idTinTuc', 'numerical', 'integerOnly'=>true),
			array('Name, Alias', 'length', 'max'=>255),
			array('Description, Content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idNgonNgu, idTinTuc, Name, Alias, Description, Content', 'safe', 'on'=>'search'),
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
			'idNgonNgu' => 'Ngôn ngữ',
			'idTinTuc' => 'Id Tin Tuc',
			'Name' => 'Tiêu đề',
			'Alias' => 'Alias',
			'Description' => 'Mô tả',
			'Content' => 'Nội dung',
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
		$criteria->compare('idTinTuc',$this->idTinTuc);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Alias',$this->Alias,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Content',$this->Content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=> array('defaultOrder'=>'t.id desc')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TintucLang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
