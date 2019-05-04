<?php

/**
 * This is the model class for table "router".
 *
 * The followings are the available columns in table 'router':
 * @property integer $id
 * @property integer $idObject
 * @property string $alias
 * @property integer $type
 * @property integer $active
 */
class Router extends CActiveRecord
{
    const TYPE_PRODUCT=1;
    const TYPE_PRODUCT_CATEGORY=3;
    const TYPE_NEWS = 5;
    const TYPE_NEWS_CATEGORY=7;
    const TYPE_SINGLE_PAGE=9;
    const TYPE_VIDEO=11;
    const TYPE_VIDEO_CATEGORY=13;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'router';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idObject, alias, type', 'required'),
			array('idObject, type, active', 'numerical', 'integerOnly'=>true),
			array('alias', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idObject, alias, type, active', 'safe', 'on'=>'search'),
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
			'idObject' => 'Id Object',
			'alias' => 'Alias',
			'type' => 'Type',
			'active' => '1: san pham; 3: loai sp; 5 tin tuc; 7: loai tin tuc',
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
		$criteria->compare('idObject',$this->idObject);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Router the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * @param $data [$alias,$idObject,$type]
     * @param string $exc
     */
	public static function processRouter($data,$exc = 'create')
    {
        extract($data);
        /**
         * @property $alias
         * @property $idObject
         * @property $type
         */
        switch ($exc) {
            case 'create':
                $router = Router::model()->find("alias = '$alias'");
                if(!empty($router)) {
                    $alias = $alias .'-'.$idObject;
                }
                $self = new Router;
                $self->attributes = $data;
                $self->alias = $alias;
                $self->save();
            break;
            case 'update':
                $self = Router::model()->find("idObject = $idObject AND type = $type");
                if(!empty($router)) {
                    # check alias ton tai
                    $check  = Router::model()->find("alias = '$alias' AND idObject != $idObject ");
                    if(!empty($check)) {
                        $alias = $alias.'-'.$idObject;
                    }
                    # END
                    $self->alias = $alias;
                    $self->save();
                }
            break;
            case 'delete':
                $self = Router::model()->find("idObject = $idObject AND type = $type")->delete();
            break;
        }

    }
}
