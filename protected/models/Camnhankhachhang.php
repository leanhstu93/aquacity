<?php

/**
 * This is the model class for table "camnhankhachhang".
 *
 * The followings are the available columns in table 'camnhankhachhang':
 * @property integer $id
 * @property string $ThongTinCaNhan
 * @property string $Alias
 * @property string $TieuDe
 * @property string $UrlImage
 * @property string $Content
 * @property string $Seo_Description
 * @property string $Seo_Keywords
 * @property integer $Active
 */
class Camnhankhachhang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'camnhankhachhang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TieuDe, UrlImage, Content', 'required'),
			array('Active', 'numerical', 'integerOnly'=>true),
			array('ThongTinCaNhan, Alias, TieuDe, UrlImage, Seo_Description, Seo_Keywords', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ThongTinCaNhan, Alias, TieuDe, UrlImage, Content, Seo_Description, Seo_Keywords, Active', 'safe', 'on'=>'search'),
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
			'ThongTinCaNhan' => 'Thong Tin Ca Nhan',
			'Alias' => 'Alias',
			'TieuDe' => 'Tieu De',
			'UrlImage' => 'Url Image',
			'Content' => 'Content',
			'Seo_Description' => 'Seo Description',
			'Seo_Keywords' => 'Seo Keywords',
			'Active' => 'Active',
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
		$criteria->compare('ThongTinCaNhan',$this->ThongTinCaNhan,true);
		$criteria->compare('Alias',$this->Alias,true);
		$criteria->compare('TieuDe',$this->TieuDe,true);
		$criteria->compare('UrlImage',$this->UrlImage,true);
		$criteria->compare('Content',$this->Content,true);
		$criteria->compare('Seo_Description',$this->Seo_Description,true);
		$criteria->compare('Seo_Keywords',$this->Seo_Keywords,true);
		$criteria->compare('Active',$this->Active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Camnhankhachhang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
