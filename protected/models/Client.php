<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property string $client_id
 * @property string $client_email
 * @property string $client_password
 * @property string $client_name
 * @property string $client_address
 * @property string $client_phone
 * @property integer $client_active
 *
 * The followings are the available model relations:
 * @property Token[] $tokens
 */
class Client extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id, client_email, client_password, client_name, client_active', 'required'),
			array('client_active', 'numerical', 'integerOnly'=>true),
			array('client_id', 'length', 'max'=>128),
			array('client_email', 'length', 'max'=>50),
			array('client_password', 'length', 'max'=>256),
			array('client_name', 'length', 'max'=>100),
			array('client_phone', 'length', 'max'=>45),
			array('client_address', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('client_id, client_email, client_password, client_name, client_address, client_phone, client_active', 'safe', 'on'=>'search'),
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
			'tokens' => array(self::HAS_MANY, 'Token', 'token_client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'client_id' => 'Client',
			'client_email' => 'Client Email',
			'client_password' => 'Client Password',
			'client_name' => 'Client Name',
			'client_address' => 'Client Address',
			'client_phone' => 'Client Phone',
			'client_active' => 'Client Active',
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

		$criteria->compare('client_id',$this->client_id,true);
		$criteria->compare('client_email',$this->client_email,true);
		$criteria->compare('client_password',$this->client_password,true);
		$criteria->compare('client_name',$this->client_name,true);
		$criteria->compare('client_address',$this->client_address,true);
		$criteria->compare('client_phone',$this->client_phone,true);
		$criteria->compare('client_active',$this->client_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
