<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property string $member_id
 * @property string $member_user_id
 * @property string $member_project_id
 * @property integer $member_position_id
 * @property integer $member_status_id
 *
 * The followings are the available model relations:
 * @property Position $memberPosition
 * @property Project $memberProject
 * @property User $memberUser
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_id, member_user_id, member_project_id, member_position_id', 'required'),
			array('member_position_id, member_status_id', 'numerical', 'integerOnly'=>true),
			array('member_id, member_user_id, member_project_id', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('member_id, member_user_id, member_project_id, member_position_id, member_status_id', 'safe', 'on'=>'search'),
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
			'memberPosition' => array(self::BELONGS_TO, 'Position', 'member_position_id'),
			'memberProject' => array(self::BELONGS_TO, 'Project', 'member_project_id'),
			'memberUser' => array(self::BELONGS_TO, 'User', 'member_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'member_id' => 'Member',
			'member_user_id' => 'Member User',
			'member_project_id' => 'Member Project',
			'member_position_id' => 'Member Position',
			'member_status_id' => 'Member Status',
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

		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('member_user_id',$this->member_user_id,true);
		$criteria->compare('member_project_id',$this->member_project_id,true);
		$criteria->compare('member_position_id',$this->member_position_id);
		$criteria->compare('member_status_id',$this->member_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
