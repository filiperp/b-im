<?php

/**
 * This is the model class for table "arquivo".
 *
 * The followings are the available columns in table 'arquivo':
 * @property integer $id_arquivo
 * @property string $ref_arquivo
 * @property string $nome_arquivo
 * @property string $caminho_arquivo
 * @property integer $ativo_arquivo
 * @property integer $fk_id_veiculo
 * @property integer $fk_id_praca
 * @property integer $fk_id_programa
 * @property string $usuario
 * @property string $data
 *
 * The followings are the available model relations:
 * @property VeiculoPracaPrograma $fkIdVeiculo
 * @property VeiculoPracaPrograma $fkIdPraca
 * @property VeiculoPracaPrograma $fkIdPrograma
 * @property ArquivoHistorico[] $arquivoHistoricos
 * @property Tag[] $tags
 */
class Arquivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arquivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_arquivo, nome_arquivo, caminho_arquivo, ativo_arquivo, fk_id_veiculo, fk_id_praca, fk_id_programa, usuario, data', 'required'),
			array('ativo_arquivo, fk_id_veiculo, fk_id_praca, fk_id_programa', 'numerical', 'integerOnly'=>true),
			array('ref_arquivo, usuario', 'length', 'max'=>45),
			array('nome_arquivo', 'length', 'max'=>100),
			array('caminho_arquivo', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_arquivo, ref_arquivo, nome_arquivo, caminho_arquivo, ativo_arquivo, fk_id_veiculo, fk_id_praca, fk_id_programa, usuario, data', 'safe', 'on'=>'search'),
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
			'fkIdVeiculo' => array(self::BELONGS_TO, 'VeiculoPracaPrograma', 'fk_id_veiculo'),
			'fkIdPraca' => array(self::BELONGS_TO, 'VeiculoPracaPrograma', 'fk_id_praca'),
			'fkIdPrograma' => array(self::BELONGS_TO, 'VeiculoPracaPrograma', 'fk_id_programa'),
			'arquivoHistoricos' => array(self::HAS_MANY, 'ArquivoHistorico', 'fk_id_arquivo'),
			'tags' => array(self::MANY_MANY, 'Tag', 'arquivo_tag(fk_id_arquivo, fk_id_tag)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_arquivo' => 'Id Arquivo',
			'ref_arquivo' => 'Ref Arquivo',
			'nome_arquivo' => 'Nome Arquivo',
			'caminho_arquivo' => 'Caminho Arquivo',
			'ativo_arquivo' => 'Ativo Arquivo',
			'fk_id_veiculo' => 'Fk Id Veiculo',
			'fk_id_praca' => 'Fk Id Praca',
			'fk_id_programa' => 'Fk Id Programa',
			'usuario' => 'Usuario',
			'data' => 'Data',
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

		$criteria->compare('id_arquivo',$this->id_arquivo);
		$criteria->compare('ref_arquivo',$this->ref_arquivo,true);
		$criteria->compare('nome_arquivo',$this->nome_arquivo,true);
		$criteria->compare('caminho_arquivo',$this->caminho_arquivo,true);
		$criteria->compare('ativo_arquivo',$this->ativo_arquivo);
		$criteria->compare('fk_id_veiculo',$this->fk_id_veiculo);
		$criteria->compare('fk_id_praca',$this->fk_id_praca);
		$criteria->compare('fk_id_programa',$this->fk_id_programa);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Arquivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
