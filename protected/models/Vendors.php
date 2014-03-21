<?php

/**
 * This is the model class for table "vendors".
 *
 * The followings are the available columns in table 'vendors':
 * @property integer $id
 * @property string $vendor_name
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $description
 * @property string $tier
 * @property string $status
 * @property string $pic_url
 */
class Vendors extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vendors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vendor_name, phone, address, city, state, zip, description', 'required'),
			array('zip', 'numerical', 'integerOnly'=>true),
			array('vendor_name, city', 'length', 'max'=>75),
			array('phone, state', 'length', 'max'=>10),
			array('address', 'length', 'max'=>100),
			array('tier, status', 'length', 'max'=>1),
			array('pic_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, vendor_name, phone, address, city, state, zip, description, tier, status, pic_url', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'vendor_name' => 'Vendor Name',
			'phone' => 'Phone',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'description' => 'Description',
			'tier' => 'Tier',
			'status' => 'Status',
			'pic_url' => 'Pic Url',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('vendor_name',$this->vendor_name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('tier',$this->tier,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('pic_url',$this->pic_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vendors the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
