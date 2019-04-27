<?php

/**
 * This is the model class for table "tintuc".
 *
 * The followings are the available columns in table 'tintuc':
 * @property integer $id
 * @property integer $idLoaiTin
 * @property string $UrlImage
 * @property string $NguoiDang
 * @property integer $Date
 * @property integer $SetHome
 * @property string $Seo_Keywords
 * @property string $Seo_Description
 * @property integer $Active
 */
class Tintuc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tintuc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLoaiTin, Date, SetHome, Active,idNguoiDang', 'numerical', 'integerOnly'=>true),
			array('UrlImage, NguoiDang', 'length', 'max'=>255),
			array('Seo_Keywords, Seo_Description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idLoaiTin, idNguoiDang,UrlImage, NguoiDang, Date, SetHome, Seo_Keywords, Seo_Description, Active', 'safe', 'on'=>'search'),
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
			'tintuc_lang' => array(self::BELONGS_TO,'TintucLang',array('id'=>'idTinTuc')),
			'quantri' => array(self::BELONGS_TO,'Quantri',array('idNguoiDang'=>'id')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idNguoiDang' => 'Người đăng',
			'idLoaiTin' => 'Id Loai Tin',
			'UrlImage' => 'Hình ảnh',
			'NguoiDang' => 'Người đăng',
			'Date' => 'Date',
			'SetHome' => 'Nổi bật',
			'Seo_Keywords' => 'Seo Keywords',
			'Seo_Description' => 'Seo Description',
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
		$criteria->with ="tintuc_lang";
		
		$criteria->compare('id',$this->id);
		$criteria->compare('idLoaiTin',$this->idLoaiTin);
		$criteria->compare('idNguoiDang',$this->idNguoiDang);
		$criteria->compare('UrlImage',$this->UrlImage,true);
		$criteria->compare('NguoiDang',$this->NguoiDang,true);
		$criteria->compare('Date',$this->Date);
		$criteria->compare('SetHome',$this->SetHome);
		$criteria->compare('Seo_Keywords',$this->Seo_Keywords,true);
		$criteria->compare('Seo_Description',$this->Seo_Description,true);
		$criteria->compare('tintuc_lang.Name',Yii::app()->request->getParam('Name'),true);
		$criteria->condition = "tintuc_lang.idNgonNgu = 1";
		$criteria->compare('t.Active',$this->Active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=> array('defaultOrder'=>'t.id desc')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tintuc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
