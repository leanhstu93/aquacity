<?php

/**
 * This is the model class for table "single_page".
 *
 * The followings are the available columns in table 'single_page':
 * @property integer $id
 * @property integer $set_home
 * @property integer $set_menu
 * @property string $name
 * @property string $urlImage
 * @property string $description
 * @property string $content
 * @property string $seo_description
 * @property string $seo_keywords
 * @property integer $active
 */
class SinglePage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'single_page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('set_home, set_menu, name', 'required'),
			array('set_home, set_menu, active', 'numerical', 'integerOnly'=>true),
			array('name, urlImage, seo_description, seo_keywords', 'length', 'max'=>255),
			array('description, content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, set_home, set_menu, name, urlImage, description, content, seo_description, seo_keywords, active', 'safe', 'on'=>'search'),
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
			'set_home' => 'Set Home',
			'set_menu' => 'Set Menu',
			'name' => 'Name',
			'urlImage' => 'Url Image',
			'description' => 'Description',
			'content' => 'Content',
			'seo_description' => 'Seo Description',
			'seo_keywords' => 'Seo Keywords',
			'active' => 'Active',
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
		$criteria->compare('set_home',$this->set_home);
		$criteria->compare('set_menu',$this->set_menu);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('urlImage',$this->urlImage,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('seo_keywords',$this->seo_keywords,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SinglePage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
