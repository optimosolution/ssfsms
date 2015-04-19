<?php

/**
 * This is the model class for table "{{phone_book}}".
 *
 * The followings are the available columns in table '{{phone_book}}':
 * @property integer $id
 * @property string $user_id
 * @property string $full_name
 * @property string $designation
 * @property string $extension
 * @property string $imi_no
 * @property string $sim_1
 * @property string $sim_2
 * @property string $last_use
 */
class PhoneBook extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{phone_book}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('full_name, last_use', 'required'),
            array('user_id, imi_no', 'length', 'max' => 20),
            array('full_name', 'length', 'max' => 150),
            array('designation', 'length', 'max' => 100),
            array('extension', 'length', 'max' => 50),
            array('sim_1, sim_2', 'length', 'max' => 15),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, full_name, designation, extension, imi_no, sim_1, sim_2, last_use', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'Name',
            'full_name' => 'User ID',
            'designation' => 'Designation',
            'extension' => 'Extension',
            'imi_no' => 'IMI',
            'sim_1' => 'SIM 1',
            'sim_2' => 'SIM 2',
            'last_use' => 'Last Use',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id, true);
        $criteria->compare('full_name', $this->full_name, true);
        $criteria->compare('designation', $this->designation, true);
        $criteria->compare('extension', $this->extension, true);
        $criteria->compare('imi_no', $this->imi_no, true);
        $criteria->compare('sim_1', $this->sim_1, true);
        $criteria->compare('sim_2', $this->sim_2, true);
        $criteria->compare('last_use', $this->last_use, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PhoneBook the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
