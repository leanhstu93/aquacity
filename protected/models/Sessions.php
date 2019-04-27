<?php

/**
 * This is the model class for table "sessions".
 *
 * The followings are the available columns in table 'sessions':
 * @property integer $id
 * @property string $idSession
 * @property string $username
 * @property string $ipAddress
 * @property integer $idloai
 * @property integer $lastVisit
 * @property integer $session_start
 * @property string $userAgent
 */
class Sessions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sessions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idSession, ipAddress, lastVisit, session_start', 'required'),
			array('idloai, lastVisit, session_start', 'numerical', 'integerOnly'=>true),
			array('idSession, username', 'length', 'max'=>100),
			array('ipAddress', 'length', 'max'=>20),
			array('userAgent', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idSession, username, ipAddress, idloai, lastVisit, session_start, userAgent', 'safe', 'on'=>'search'),
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
			'idSession' => 'Id Session',
			'username' => 'Username',
			'ipAddress' => 'Ip Address',
			'idloai' => 'Idloai',
			'lastVisit' => 'Last Visit',
			'session_start' => 'Session Start',
			'userAgent' => 'User Agent',
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
		$criteria->compare('idSession',$this->idSession,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('ipAddress',$this->ipAddress,true);
		$criteria->compare('idloai',$this->idloai);
		$criteria->compare('lastVisit',$this->lastVisit);
		$criteria->compare('session_start',$this->session_start);
		$criteria->compare('userAgent',$this->userAgent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sessions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
