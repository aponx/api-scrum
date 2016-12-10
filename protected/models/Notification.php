<?php

/**
 * This is the model class for table "notification".
 *
 * The followings are the available columns in table 'notification':
 * @property string $notification_id
 * @property string $notification_label
 * @property string $notification_description
 * @property string $notification_date
 * @property string $notification_method
 * @property string $notification_method_id
 */
class Notification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('notification_id, notification_label, notification_date, notification_method, notification_method_id', 'required'),
			array('notification_id, notification_method_id', 'length', 'max'=>128),
			array('notification_label', 'length', 'max'=>256),
			array('notification_method', 'length', 'max'=>45),
			array('notification_description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('notification_id, notification_label, notification_description, notification_date, notification_method, notification_method_id', 'safe', 'on'=>'search'),
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
			'notification_id' => 'Notification',
			'notification_label' => 'Notification Label',
			'notification_description' => 'Notification Description',
			'notification_date' => 'Notification Date',
			'notification_method' => 'Notification Method',
			'notification_method_id' => 'Notification Method',
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

		$criteria->compare('notification_id',$this->notification_id,true);
		$criteria->compare('notification_label',$this->notification_label,true);
		$criteria->compare('notification_description',$this->notification_description,true);
		$criteria->compare('notification_date',$this->notification_date,true);
		$criteria->compare('notification_method',$this->notification_method,true);
		$criteria->compare('notification_method_id',$this->notification_method_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
