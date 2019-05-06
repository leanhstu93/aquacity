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
class Loaitin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'loaitin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Parent, SetMenu,Order, SetHome, SetQC,Active', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Parent, SetMenu,Order, SetHome, Active, SetQC', 'safe', 'on'=>'search'),
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
			'loaitin_lang' => array(self::BELONGS_TO,'LoaitinLang',array('id'=>'idLoaiTin')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Order' => 'Thứ tự',
			'Parent' => 'Parent',
			'SetMenu' => 'Hiển thị menu',
			'SetHome' => 'Set Home',
			'Active' => 'Hiển thị',
			'SetQC' => 'Quảng cáo hiển thị trang chủ'
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
		$criteria->with =array('loaitin_lang');
		$criteria->compare('id',$this->id);
		$criteria->compare('Parent',$this->Parent);
		$criteria->compare('SetMenu',$this->SetMenu);
		$criteria->compare('SetHome',$this->SetHome);
		$criteria->compare('Active',$this->Active);
		$criteria->compare('SetQC',$this->SetQC);
		$criteria->compare('loaitin_lang.Name',Yii::app()->request->getParam('Name'),true);
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

    /**
     * Lấy dữ liệu hình ảnh theo setting
     * @param $key
     * @return array|mixed|null
     */
    public static function getDataByCustomSetting($key)
    {
        $custom = Custom::getSettingcustom();
        $custom_image =  (object)$custom[Custom::KEY_NEWS_CATEGORY][$key];
        $result = [
            'posts' => null,
            'category' => null
        ];

        $result = (object) $result;
        if(!empty($custom_image->data)) {
            $criteria = new CDbCriteria();
            $criteria->with = "loaitin_lang";
            $criteria->condition = "t.id = ".$custom_image->data."  AND Active = 1";
            $result->category = Loaitin::model()->find($criteria);

            $criteria = new CDbCriteria();
            $criteria->with = "tintuc_lang";
            $criteria->condition = "idNgonNgu = 1 and Active = 1";
            $criteria->order = "t.id desc";
            $data_id = [];
            Common::getloaicon($result->category->id,"Loaitin",$data_id);
            $criteria->addInCondition("idLoaiTin",$data_id);

            if($custom_image->limit == 1) {
                $result->post = Tintuc::model()->find($criteria);
            } elseif ($custom_image->limit == 0) {
                $result->post = Tintuc::model()->findAll($criteria);
            } else {
                $criteria->limit = $custom_image->limit;
                $result->post = Tintuc::model()->findAll($criteria);
            }

            return $result;
        }

    }
}
