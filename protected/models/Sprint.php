<?php

/**
 * This is the model class for table "sprint".
 *
 * The followings are the available columns in table 'sprint':
 * @property string $sprint_id
 * @property string $sprint_project_id
 * @property string $sprint_label
 * @property string $sprint_description
 * @property integer $sprint_status_id
 *
 * The followings are the available model relations:
 * @property Project $sprintProject
 * @property Tiket[] $tikets
 */
class Sprint extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sprint';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sprint_id, sprint_project_id, sprint_label, sprint_status_id', 'required'),
			array('sprint_status_id', 'numerical', 'integerOnly'=>true),
			array('sprint_id, sprint_project_id', 'length', 'max'=>128),
			array('sprint_label', 'length', 'max'=>100),
			array('sprint_description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sprint_id, sprint_project_id, sprint_label, sprint_description, sprint_status_id', 'safe', 'on'=>'search'),
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
			'sprintProject' => array(self::BELONGS_TO, 'Project', 'sprint_project_id'),
			'tikets' => array(self::HAS_MANY, 'Tiket', 'tiket_sprint_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sprint_id' => 'Sprint',
			'sprint_project_id' => 'Sprint Project',
			'sprint_label' => 'Sprint Label',
			'sprint_description' => 'Sprint Description',
			'sprint_status_id' => 'Sprint Status',
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

		$criteria->compare('sprint_id',$this->sprint_id,true);
		$criteria->compare('sprint_project_id',$this->sprint_project_id,true);
		$criteria->compare('sprint_label',$this->sprint_label,true);
		$criteria->compare('sprint_description',$this->sprint_description,true);
		$criteria->compare('sprint_status_id',$this->sprint_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sprint the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
