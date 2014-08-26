<?php

/**
 * This is the model base class for the table "arquivo".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Arquivo".
 *
 * Columns in table "arquivo" available as properties of the model,
 * followed by relations of table "arquivo" available as properties of the model.
 *
 * @property integer $id_arquivo
 * @property string $ref_arquivo
 * @property string $nome_arquivo
 * @property string $caminho_arquivo
 * @property integer $ativo_arquivo
 * @property integer $fk_id_veiculo
 * @property integer $fk_id_praca
 * @property integer $fk_id_programa
 *
 * @property VeiculoPracaPrograma $fkIdVeiculo
 * @property VeiculoPracaPrograma $fkIdPraca
 * @property VeiculoPracaPrograma $fkIdPrograma
 * @property ArquivoHistorico[] $arquivoHistoricos
 * @property Tag[] $tags
 */
abstract class BaseArquivo extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'arquivo';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Arquivo|Arquivos', $n);
	}

	public static function representingColumn() {
		return 'ref_arquivo';
	}

	public function rules() {
		return array(
			array('ref_arquivo, nome_arquivo, caminho_arquivo, ativo_arquivo', 'required'),
			array('fk_id_programa', 'required', 'message'=> 'Selecione um Programa'),
			//array('fk_id_praca', 'required', 'message'=> 'campo obrigatório'),
			//array('fk_id_veiculo', 'required', 'message'=> 'campo obrigatório'),
			array('ativo_arquivo, fk_id_veiculo, fk_id_praca, fk_id_programa', 'numerical', 'integerOnly'=>true),
			array('ref_arquivo', 'length', 'max'=>45),
			array('nome_arquivo', 'length', 'max'=>100),
			array('caminho_arquivo', 'length', 'max'=>512),
			array('id_arquivo, ref_arquivo, nome_arquivo, caminho_arquivo, ativo_arquivo, fk_id_veiculo, fk_id_praca, fk_id_programa', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'fkIdVeiculo' => array(self::BELONGS_TO, 'VeiculoPracaPrograma', 'fk_id_veiculo'),
			'fkIdPraca' => array(self::BELONGS_TO, 'VeiculoPracaPrograma', 'fk_id_praca'),
			'fkIdPrograma' => array(self::BELONGS_TO, 'VeiculoPracaPrograma', 'fk_id_programa'),
			'arquivoHistoricos' => array(self::HAS_MANY, 'ArquivoHistorico', 'fk_id_arquivo'),
			'tags' => array(self::MANY_MANY, 'Tag', 'arquivo_tag(fk_id_arquivo, fk_id_tag)'),
		);
	}

	public function pivotModels() {
		return array(
			'tags' => 'ArquivoTag',
		);
	}

	public function attributeLabels() {
		return array(
			'id_arquivo' => Yii::t('app', 'Id Arquivo'),
			'ref_arquivo' => Yii::t('app', 'Ref Arquivo'),
			'nome_arquivo' => Yii::t('app', 'Nome Arquivo'),
			'caminho_arquivo' => Yii::t('app', 'Caminho Arquivo'),
			'ativo_arquivo' => Yii::t('app', 'Ativo Arquivo'),
			'fk_id_veiculo' => null,
			'fk_id_praca' => null,
			'fk_id_programa' => null,
			'fkIdVeiculo' => null,
			'fkIdPraca' => null,
			'fkIdPrograma' => null,
			'arquivoHistoricos' => null,
			'tags' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_arquivo', $this->id_arquivo);
		$criteria->compare('ref_arquivo', $this->ref_arquivo, true);
		$criteria->compare('nome_arquivo', $this->nome_arquivo, true);
		$criteria->compare('caminho_arquivo', $this->caminho_arquivo, true);
		$criteria->compare('ativo_arquivo', $this->ativo_arquivo);
		$criteria->compare('fk_id_veiculo', $this->fk_id_veiculo);
		$criteria->compare('fk_id_praca', $this->fk_id_praca);
		$criteria->compare('fk_id_programa', $this->fk_id_programa);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}