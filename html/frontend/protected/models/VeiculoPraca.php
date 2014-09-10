<?php

/**
 * This is the model class for table "veiculo_praca".
 *
 * The followings are the available columns in table 'veiculo_praca':
 * @property integer $fk_id_veiculo
 * @property integer $fk_id_praca
 *
 * The followings are the available model relations:
 * @property VeiculoPracaPrograma[] $veiculoPracaProgramas
 * @property VeiculoPracaPrograma[] $veiculoPracaProgramas1
 */
class VeiculoPraca extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'veiculo_praca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_id_veiculo, fk_id_praca', 'required'),
			array('fk_id_veiculo, fk_id_praca', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fk_id_veiculo, fk_id_praca', 'safe', 'on'=>'search'),
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
			'veiculoPracaProgramas' => array(self::HAS_MANY, 'VeiculoPracaPrograma', 'fk_id_veiculo'),
			'veiculoPracaProgramas1' => array(self::HAS_MANY, 'VeiculoPracaPrograma', 'fk_id_praca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fk_id_veiculo' => 'Fk Id Veiculo',
			'fk_id_praca' => 'Fk Id Praca',
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

		$criteria->compare('fk_id_veiculo',$this->fk_id_veiculo);
		$criteria->compare('fk_id_praca',$this->fk_id_praca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VeiculoPraca the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
