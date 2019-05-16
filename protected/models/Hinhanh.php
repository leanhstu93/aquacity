<?php

/**
 * This is the model class for table "hinhanh".
 *
 * The followings are the available columns in table 'hinhanh':
 * @property integer $id
 * @property integer $id_category
 * @property string $name
 * @property string $link
 * @property string $description
 * @property string $url_image
 * @property integer $active
 */
class Hinhanh extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hinhanh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url_image', 'required'),
			array('id_category, active', 'numerical', 'integerOnly'=>true),
			array('name, link, url_image', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_category, name, link, description, url_image, active', 'safe', 'on'=>'search'),
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
            'loaihinhanh' => array(self::BELONGS_TO,'Loaihinhanh',array('id_category'=>'id')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_category' => 'Danh mục',
			'name' => 'Tiêu đề',
			'link' => 'Đường dẫn',
			'description' => 'Mô tả',
			'url_image' => 'Hình ảnh',
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
        $criteria->with =array("loaihinhanh");
		$criteria->compare('id',$this->id);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('name',$this->name,true);
        $criteria->compare('loaihinhanh.name',Yii::app()->request->getParam('loaihinhanh'),true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('url_image',$this->url_image,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=> array('defaultOrder'=>'t.id desc')
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hinhanh the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * Lấy dữ liệu hình ảnh theo setting
     * @param $key
     * @return array|mixed|null
     */
    public static function getDataByCustomSetting($key)
    {
        $custom = Custom::getSettingcustom();
        $custom_image =  (object)$custom[Custom::KEY_IMAGE][$key];
        $result = [
            'hinhanh' => null,
            'category' => null
        ];
        $result = (object) $result;
        if(!empty($custom_image->data)) {
            $result->category = Loaihinhanh::model()->find('id = '.$custom_image->data.' AND active = 1');
            if($custom_image->limit == 1) {
                $result->hinhanh = self::model()->find('id_category = '.$custom_image->data . ' AND active = 1');
            } elseif ($custom_image->limit == 0) {
                $result->hinhanh = self::model()->findAll('id_category = '.$custom_image->data . ' AND active = 1');
            } else {
                $criteria = new CDbCriteria();
                $criteria->condition = 'id_category = '.$custom_image->data . ' AND active = 1';
                $criteria->order = "id";
                $criteria->limit = $custom_image->limit;
                $result->hinhanh = self::model()->findAll($criteria);
            }

            return $result;
        }

    }

}
