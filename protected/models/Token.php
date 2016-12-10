<?php

/**
 * This is the model class for table "token".
 *
 * The followings are the available columns in table 'token':
 * @property string $token_id
 * @property integer $token_source
 * @property string $token_client_id
 * @property string $token_key
 * @property string $token_create_date
 * @property string $token_user_create
 *
 * The followings are the available model relations:
 * @property Client $tokenClient
 * @property User $tokenUserCreate
 */
class Token extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'token';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('token_id, token_source, token_client_id, token_key, token_create_date, token_user_create', 'required'),
			array('token_source', 'numerical', 'integerOnly'=>true),
			array('token_id, token_client_id, token_user_create', 'length', 'max'=>128),
			array('token_key', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('token_id, token_source, token_client_id, token_key, token_create_date, token_user_create', 'safe', 'on'=>'search'),
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
			'tokenClient' => array(self::BELONGS_TO, 'Client', 'token_client_id'),
			'tokenUserCreate' => array(self::BELONGS_TO, 'User', 'token_user_create'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'token_id' => 'Token',
			'token_source' => 'Token Source',
			'token_client_id' => 'Token Client',
			'token_key' => 'Token Key',
			'token_create_date' => 'Token Create Date',
			'token_user_create' => 'Token User Create',
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

		$criteria->compare('token_id',$this->token_id,true);
		$criteria->compare('token_source',$this->token_source);
		$criteria->compare('token_client_id',$this->token_client_id,true);
		$criteria->compare('token_key',$this->token_key,true);
		$criteria->compare('token_create_date',$this->token_create_date,true);
		$criteria->compare('token_user_create',$this->token_user_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Token the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
