<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $user_id
 * @property string $user_username
 * @property string $user_password
 * @property string $user_name
 * @property string $user_gender
 * @property string $user_address
 * @property string $user_district
 * @property string $user_city
 * @property integer $user_country_id
 * @property string $user_zip_code
 * @property integer $user_level_id
 * @property integer $user_status_id
 * @property string $user_last_login
 * @property string $user_create
 *
 * The followings are the available model relations:
 * @property Member[] $members
 * @property Project[] $projects
 * @property Setting[] $settings
 * @property Tiket[] $tikets
 * @property Tiket[] $tikets1
 * @property Tiket[] $tikets2
 * @property Tiket[] $tikets3
 * @property Country $userCountry
 * @property Level $userLevel
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, user_username, user_password, user_level_id, user_create', 'required'),
			array('user_country_id, user_level_id, user_status_id', 'numerical', 'integerOnly'=>true),
			array('user_id, user_password', 'length', 'max'=>128),
			array('user_username', 'length', 'max'=>45),
			array('user_name, user_district, user_city', 'length', 'max'=>100),
			array('user_gender, user_zip_code', 'length', 'max'=>10),
			array('user_address, user_last_login', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, user_username, user_password, user_name, user_gender, user_address, user_district, user_city, user_country_id, user_zip_code, user_level_id, user_status_id, user_last_login, user_create', 'safe', 'on'=>'search'),
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
			'members' => array(self::HAS_MANY, 'Member', 'member_user_id'),
			'projects' => array(self::HAS_MANY, 'Project', 'project_create_user_id'),
			'settings' => array(self::HAS_MANY, 'Setting', 'setting_user_id'),
			'tikets' => array(self::HAS_MANY, 'Tiket', 'tiket_assign_to'),
			'tikets1' => array(self::HAS_MANY, 'Tiket', 'tiket_resolver_one'),
			'tikets2' => array(self::HAS_MANY, 'Tiket', 'tiket_resolver_three'),
			'tikets3' => array(self::HAS_MANY, 'Tiket', 'tiket_resolver_two'),
			'userCountry' => array(self::BELONGS_TO, 'Country', 'user_country_id'),
			'userLevel' => array(self::BELONGS_TO, 'Level', 'user_level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_username' => 'User Username',
			'user_password' => 'User Password',
			'user_name' => 'User Name',
			'user_gender' => 'User Gender',
			'user_address' => 'User Address',
			'user_district' => 'User District',
			'user_city' => 'User City',
			'user_country_id' => 'User Country',
			'user_zip_code' => 'User Zip Code',
			'user_level_id' => 'User Level',
			'user_status_id' => 'User Status',
			'user_last_login' => 'User Last Login',
			'user_create' => 'User Create',
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

		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('user_username',$this->user_username,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_gender',$this->user_gender,true);
		$criteria->compare('user_address',$this->user_address,true);
		$criteria->compare('user_district',$this->user_district,true);
		$criteria->compare('user_city',$this->user_city,true);
		$criteria->compare('user_country_id',$this->user_country_id);
		$criteria->compare('user_zip_code',$this->user_zip_code,true);
		$criteria->compare('user_level_id',$this->user_level_id);
		$criteria->compare('user_status_id',$this->user_status_id);
		$criteria->compare('user_last_login',$this->user_last_login,true);
		$criteria->compare('user_create',$this->user_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validatePassword($pass) {
		return md5($pass) == $this->user_password;
	}
}
