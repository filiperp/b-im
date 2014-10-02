<?php

/**
 * This is the model class for table "veiculo".
 *
 * The followings are the available columns in table 'veiculo':
 * @property integer $id_veiculo
 * @property string $ref_veiculo
 * @property string $nome_veiculo
 * @property string $descricao_veiculo
 * @property string $imagem_veiculo
 * @property integer $ativo_veiculo
 *
 * The followings are the available model relations:
 * @property Analise[] $analises
 * @property Praca[] $pracas
 * @property Tag[] $tags
 */
class Veiculo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'veiculo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_veiculo, nome_veiculo, descricao_veiculo, imagem_veiculo, ativo_veiculo', 'required'),
			array('ativo_veiculo', 'numerical', 'integerOnly'=>true),
			array('ref_veiculo', 'length', 'max'=>45),
			array('nome_veiculo', 'length', 'max'=>100),
			array('descricao_veiculo', 'length', 'max'=>512),
			array('imagem_veiculo', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_veiculo, ref_veiculo, nome_veiculo, descricao_veiculo, imagem_veiculo, ativo_veiculo', 'safe', 'on'=>'search'),
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
			'analises' => array(self::MANY_MANY, 'Analise', 'veiculo_analise(fk_id_veiculo, fk_id_analise)'),
			'pracas' => array(self::MANY_MANY, 'Praca', 'veiculo_praca(fk_id_veiculo, fk_id_praca)'),
			'tags' => array(self::MANY_MANY, 'Tag', 'veiculo_tag(veiculo_id_veiculo, tag_id_tag)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_veiculo' => 'Id Veiculo',
			'ref_veiculo' => 'Ref Veiculo',
			'nome_veiculo' => 'Nome Veiculo',
			'descricao_veiculo' => 'Descricao Veiculo',
			'imagem_veiculo' => 'Imagem Veiculo',
			'ativo_veiculo' => 'Ativo Veiculo',
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

		$criteria->compare('id_veiculo',$this->id_veiculo);
		$criteria->compare('ref_veiculo',$this->ref_veiculo,true);
		$criteria->compare('nome_veiculo',$this->nome_veiculo,true);
		$criteria->compare('descricao_veiculo',$this->descricao_veiculo,true);
		$criteria->compare('imagem_veiculo',$this->imagem_veiculo,true);
		$criteria->compare('ativo_veiculo',$this->ativo_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Veiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
