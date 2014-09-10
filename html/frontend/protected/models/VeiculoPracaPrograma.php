<?php

/**
 * This is the model class for table "veiculo_praca_programa".
 *
 * The followings are the available columns in table 'veiculo_praca_programa':
 * @property integer $fk_id_veiculo
 * @property integer $fk_id_praca
 * @property integer $fk_id_programa
 *
 * The followings are the available model relations:
 * @property Arquivo[] $arquivos
 * @property Arquivo[] $arquivos1
 * @property Arquivo[] $arquivos2
 * @property Programa $fkIdPrograma
 * @property VeiculoPraca $fkIdVeiculo
 * @property VeiculoPraca $fkIdPraca
 */
class VeiculoPracaPrograma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'veiculo_praca_programa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_id_veiculo, fk_id_praca, fk_id_programa', 'required'),
			array('fk_id_veiculo, fk_id_praca, fk_id_programa', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fk_id_veiculo, fk_id_praca, fk_id_programa', 'safe', 'on'=>'search'),
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
			'arquivos' => array(self::HAS_MANY, 'Arquivo', 'fk_id_veiculo'),
			'arquivos1' => array(self::HAS_MANY, 'Arquivo', 'fk_id_praca'),
			'arquivos2' => array(self::HAS_MANY, 'Arquivo', 'fk_id_programa'),
			'fkIdPrograma' => array(self::BELONGS_TO, 'Programa', 'fk_id_programa'),
			'fkIdVeiculo' => array(self::BELONGS_TO, 'VeiculoPraca', 'fk_id_veiculo'),
			'fkIdPraca' => array(self::BELONGS_TO, 'VeiculoPraca', 'fk_id_praca'),
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
			'fk_id_programa' => 'Fk Id Programa',
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
		$criteria->compare('fk_id_programa',$this->fk_id_programa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VeiculoPracaPrograma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
