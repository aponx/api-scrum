<?php

/**
 * This is the model class for table "setting".
 *
 * The followings are the available columns in table 'setting':
 * @property string $setting_id
 * @property string $setting_user_id
 * @property integer $setting_notification
 * @property integer $setting_sound_notification
 * @property integer $setting_vibrate_notification
 *
 * The followings are the available model relations:
 * @property User $settingUser
 */
class Setting extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'setting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('setting_id, setting_user_id', 'required'),
			array('setting_notification, setting_sound_notification, setting_vibrate_notification', 'numerical', 'integerOnly'=>true),
			array('setting_id, setting_user_id', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('setting_id, setting_user_id, setting_notification, setting_sound_notification, setting_vibrate_notification', 'safe', 'on'=>'search'),
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
			'settingUser' => array(self::BELONGS_TO, 'User', 'setting_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'setting_id' => 'Setting',
			'setting_user_id' => 'Setting User',
			'setting_notification' => 'Setting Notification',
			'setting_sound_notification' => 'Setting Sound Notification',
			'setting_vibrate_notification' => 'Setting Vibrate Notification',
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

		$criteria->compare('setting_id',$this->setting_id,true);
		$criteria->compare('setting_user_id',$this->setting_user_id,true);
		$criteria->compare('setting_notification',$this->setting_notification);
		$criteria->compare('setting_sound_notification',$this->setting_sound_notification);
		$criteria->compare('setting_vibrate_notification',$this->setting_vibrate_notification);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Setting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
