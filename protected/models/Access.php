<?php

/**
 * This is the model class for table "access".
 *
 * The followings are the available columns in table 'access':
 * @property string $access_id
 * @property string $access_url
 * @property string $access_action
 * @property string $access_method
 * @property integer $access_param
 * @property integer $access_active
 */
class Access extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'access';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('access_id, access_url, access_action, access_method, access_active', 'required'),
			array('access_param, access_active', 'numerical', 'integerOnly'=>true),
			array('access_id, access_url, access_action, access_method', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('access_id, access_url, access_action, access_method, access_param, access_active', 'safe', 'on'=>'search'),
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
			'access_id' => 'Access',
			'access_url' => 'Access Url',
			'access_action' => 'Access Action',
			'access_method' => 'Access Method',
			'access_param' => 'Access Param',
			'access_active' => 'Access Active',
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

		$criteria->compare('access_id',$this->access_id,true);
		$criteria->compare('access_url',$this->access_url,true);
		$criteria->compare('access_action',$this->access_action,true);
		$criteria->compare('access_method',$this->access_method,true);
		$criteria->compare('access_param',$this->access_param);
		$criteria->compare('access_active',$this->access_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Access the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
