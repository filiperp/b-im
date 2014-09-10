<?php

/**
 * This is the model class for table "praca".
 *
 * The followings are the available columns in table 'praca':
 * @property integer $id_praca
 * @property string $ref_praca
 * @property string $nome_praca
 * @property string $descricao_praca
 * @property integer $ativo_praca
 *
 * The followings are the available model relations:
 * @property Veiculo[] $veiculos
 */
class Praca extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'praca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_praca, nome_praca, descricao_praca, ativo_praca', 'required'),
			array('ativo_praca', 'numerical', 'integerOnly'=>true),
			array('ref_praca', 'length', 'max'=>45),
			array('nome_praca', 'length', 'max'=>100),
			array('descricao_praca', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_praca, ref_praca, nome_praca, descricao_praca, ativo_praca', 'safe', 'on'=>'search'),
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
			'veiculos' => array(self::MANY_MANY, 'Veiculo', 'veiculo_praca(fk_id_praca, fk_id_veiculo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_praca' => 'Id Praca',
			'ref_praca' => 'Ref Praca',
			'nome_praca' => 'Nome Praca',
			'descricao_praca' => 'Descricao Praca',
			'ativo_praca' => 'Ativo Praca',
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

		$criteria->compare('id_praca',$this->id_praca);
		$criteria->compare('ref_praca',$this->ref_praca,true);
		$criteria->compare('nome_praca',$this->nome_praca,true);
		$criteria->compare('descricao_praca',$this->descricao_praca,true);
		$criteria->compare('ativo_praca',$this->ativo_praca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Praca the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
