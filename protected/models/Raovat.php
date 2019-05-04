<?php

/**
 * This is the model class for table "raovat".
 *
 * The followings are the available columns in table 'raovat':
 * @property integer $id
 * @property string $Name
 * @property string $Alias
 * @property string $UrlImage
 * @property string $Price
 * @property string $Description
 * @property string $Content
 * @property integer $Active
 * @property string $Seo_Title
 * @property string $Seo_Description
 * @property string $Seo_Keywords
 */
class Raovat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'raovat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name', 'unique','message'=>'Rao vặt này tồn tại'),
			array('Name', 'required','message'=>'{attribute} không thể trống'),
			array('Active,SetHome,Date,Start', 'numerical', 'integerOnly'=>true),
			array('Name, Alias, UrlImage, Price, Seo_Title, Seo_Description, Seo_Keywords', 'length', 'max'=>255),
			array('Description, Content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, Alias, UrlImage, Price, Description, Content, Active, Seo_Title, Seo_Description, Seo_Keywords', 'safe', 'on'=>'search'),
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
			'Name' => 'Name',
			'Alias' => 'Alias',
			'UrlImage' => 'Url Image',
			'Price' => 'Price',
			'Description' => 'Description',
			'Content' => 'Content',
			'SetHome' => 'Nổi bật',
			'Active' => 'Active',
			'Date' => 'Ngày đăng',
			'Ngày bắt đầu' => 'Ngày bắt đầu',
			'Seo_Title' => 'Seo Title',
			'Seo_Description' => 'Seo Description',
			'Seo_Keywords' => 'Seo Keywords',
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
		$criteria->compare('UrlImage',$this->UrlImage,true);
		$criteria->compare('Price',$this->Price,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Content',$this->Content,true);
		$criteria->compare('SetHome',$this->SetHome);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('Date',$this->Date);
		$criteria->compare('Start',$this->Start);
		$criteria->compare('Seo_Title',$this->Seo_Title,true);
		$criteria->compare('Seo_Description',$this->Seo_Description,true);
		$criteria->compare('Seo_Keywords',$this->Seo_Keywords,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Raovat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
