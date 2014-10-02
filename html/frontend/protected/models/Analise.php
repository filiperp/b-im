<?php

/**
 * This is the model class for table "analise".
 *
 * The followings are the available columns in table 'analise':
 * @property integer $id_analise
 * @property string $ref_analise
 * @property string $nome_analise
 * @property string $descricao_analise
 * @property string $imagem_analise
 * @property integer $ativo_analise
 * @property string $tipo_analise
 *
 * The followings are the available model relations:
 * @property Tag[] $tags
 * @property Veiculo[] $veiculos
 */
class Analise extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'analise';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_analise, nome_analise, descricao_analise, imagem_analise, ativo_analise, tipo_analise', 'required'),
			array('ativo_analise', 'numerical', 'integerOnly'=>true),
			array('ref_analise, tipo_analise', 'length', 'max'=>45),
			array('nome_analise', 'length', 'max'=>100),
			array('descricao_analise', 'length', 'max'=>512),
			array('imagem_analise', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_analise, ref_analise, nome_analise, descricao_analise, imagem_analise, ativo_analise, tipo_analise', 'safe', 'on'=>'search'),
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
			'tags' => array(self::MANY_MANY, 'Tag', 'analise_tag(fk_id_analise, fk_id_tag)'),
			'veiculos' => array(self::MANY_MANY, 'Veiculo', 'veiculo_analise(fk_id_analise, fk_id_veiculo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_analise' => 'Id Analise',
			'ref_analise' => 'Ref Analise',
			'nome_analise' => 'Nome Analise',
			'descricao_analise' => 'Descricao Analise',
			'imagem_analise' => 'Imagem Analise',
			'ativo_analise' => 'Ativo Analise',
			'tipo_analise' => 'Tipo Analise',
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

		$criteria->compare('id_analise',$this->id_analise);
		$criteria->compare('ref_analise',$this->ref_analise,true);
		$criteria->compare('nome_analise',$this->nome_analise,true);
		$criteria->compare('descricao_analise',$this->descricao_analise,true);
		$criteria->compare('imagem_analise',$this->imagem_analise,true);
		$criteria->compare('ativo_analise',$this->ativo_analise);
		$criteria->compare('tipo_analise',$this->tipo_analise,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Analise the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
