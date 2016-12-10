<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property string $project_id
 * @property string $project_name
 * @property string $project_description
 * @property string $project_create_user_id
 * @property integer $project_status_id
 *
 * The followings are the available model relations:
 * @property Member[] $members
 * @property User $projectCreateUser
 * @property Sprint[] $sprints
 */
class Project extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id, project_name, project_create_user_id', 'required'),
			array('project_status_id', 'numerical', 'integerOnly'=>true),
			array('project_id, project_create_user_id', 'length', 'max'=>128),
			array('project_name', 'length', 'max'=>100),
			array('project_description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('project_id, project_name, project_description, project_create_user_id, project_status_id', 'safe', 'on'=>'search'),
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
			'members' => array(self::HAS_MANY, 'Member', 'member_project_id'),
			'projectCreateUser' => array(self::BELONGS_TO, 'User', 'project_create_user_id'),
			'sprints' => array(self::HAS_MANY, 'Sprint', 'sprint_project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'project_id' => 'Project',
			'project_name' => 'Project Name',
			'project_description' => 'Project Description',
			'project_create_user_id' => 'Project Create User',
			'project_status_id' => 'Project Status',
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

		$criteria->compare('project_id',$this->project_id,true);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('project_description',$this->project_description,true);
		$criteria->compare('project_create_user_id',$this->project_create_user_id,true);
		$criteria->compare('project_status_id',$this->project_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
