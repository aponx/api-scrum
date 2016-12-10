<?php

/**
 * This is the model class for table "tiket".
 *
 * The followings are the available columns in table 'tiket':
 * @property string $tiket_id
 * @property string $tiket_sprint_id
 * @property string $tiket_label
 * @property string $tiket_description
 * @property integer $tiket_priority_id
 * @property integer $tiket_type_id
 * @property string $tiket_assign_to
 * @property string $tiket_resolver_one
 * @property string $tiket_resolver_two
 * @property string $tiket_resolver_three
 * @property integer $tiket_status_id
 *
 * The followings are the available model relations:
 * @property Priority $tiketPriority
 * @property Sprint $tiketSprint
 * @property Status $tiketStatus
 * @property Type $tiketType
 * @property User $tiketAssignTo
 * @property User $tiketResolverOne
 * @property User $tiketResolverThree
 * @property User $tiketResolverTwo
 */
class Tiket extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tiket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tiket_id, tiket_sprint_id, tiket_label, tiket_priority_id, tiket_type_id, tiket_assign_to, tiket_status_id', 'required'),
			array('tiket_priority_id, tiket_type_id, tiket_status_id', 'numerical', 'integerOnly'=>true),
			array('tiket_id, tiket_sprint_id, tiket_assign_to, tiket_resolver_one, tiket_resolver_two, tiket_resolver_three', 'length', 'max'=>128),
			array('tiket_label', 'length', 'max'=>256),
			array('tiket_description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tiket_id, tiket_sprint_id, tiket_label, tiket_description, tiket_priority_id, tiket_type_id, tiket_assign_to, tiket_resolver_one, tiket_resolver_two, tiket_resolver_three, tiket_status_id', 'safe', 'on'=>'search'),
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
			'tiketPriority' => array(self::BELONGS_TO, 'Priority', 'tiket_priority_id'),
			'tiketSprint' => array(self::BELONGS_TO, 'Sprint', 'tiket_sprint_id'),
			'tiketStatus' => array(self::BELONGS_TO, 'Status', 'tiket_status_id'),
			'tiketType' => array(self::BELONGS_TO, 'Type', 'tiket_type_id'),
			'tiketAssignTo' => array(self::BELONGS_TO, 'User', 'tiket_assign_to'),
			'tiketResolverOne' => array(self::BELONGS_TO, 'User', 'tiket_resolver_one'),
			'tiketResolverThree' => array(self::BELONGS_TO, 'User', 'tiket_resolver_three'),
			'tiketResolverTwo' => array(self::BELONGS_TO, 'User', 'tiket_resolver_two'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tiket_id' => 'Tiket',
			'tiket_sprint_id' => 'Tiket Sprint',
			'tiket_label' => 'Tiket Label',
			'tiket_description' => 'Tiket Description',
			'tiket_priority_id' => 'Tiket Priority',
			'tiket_type_id' => 'Tiket Type',
			'tiket_assign_to' => 'Tiket Assign To',
			'tiket_resolver_one' => 'Tiket Resolver One',
			'tiket_resolver_two' => 'Tiket Resolver Two',
			'tiket_resolver_three' => 'Tiket Resolver Three',
			'tiket_status_id' => 'Tiket Status',
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

		$criteria->compare('tiket_id',$this->tiket_id,true);
		$criteria->compare('tiket_sprint_id',$this->tiket_sprint_id,true);
		$criteria->compare('tiket_label',$this->tiket_label,true);
		$criteria->compare('tiket_description',$this->tiket_description,true);
		$criteria->compare('tiket_priority_id',$this->tiket_priority_id);
		$criteria->compare('tiket_type_id',$this->tiket_type_id);
		$criteria->compare('tiket_assign_to',$this->tiket_assign_to,true);
		$criteria->compare('tiket_resolver_one',$this->tiket_resolver_one,true);
		$criteria->compare('tiket_resolver_two',$this->tiket_resolver_two,true);
		$criteria->compare('tiket_resolver_three',$this->tiket_resolver_three,true);
		$criteria->compare('tiket_status_id',$this->tiket_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tiket the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
