<?php

/**
 * This is the model base class for the table "analise".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Analise".
 *
 * Columns in table "analise" available as properties of the model,
 * followed by relations of table "analise" available as properties of the model.
 *
 * @property integer $id_analise
 * @property string $ref_analise
 * @property string $nome_analise
 * @property string $descricao_analise
 * @property string $imagem_analise
 * @property integer $ativo_analise
 *
 * @property Tag[] $tags
 * @property Veiculo[] $veiculos
 */
abstract class BaseAnalise extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'analise';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Analise|Analises', $n);
	}

	public static function representingColumn() {
		return 'ref_analise';
	}

	public function rules() {
		return array(
			array('ref_analise, nome_analise, descricao_analise, imagem_analise, ativo_analise', 'required'),
			array('ativo_analise', 'numerical', 'integerOnly'=>true),
			array('ref_analise', 'length', 'max'=>45),
			array('nome_analise', 'length', 'max'=>100),
			array('descricao_analise', 'length', 'max'=>512),
			array('imagem_analise', 'length', 'max'=>255),
			array('id_analise, ref_analise, nome_analise, descricao_analise, imagem_analise, ativo_analise', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tags' => array(self::MANY_MANY, 'Tag', 'analise_tag(fk_id_analise, fk_id_tag)'),
			'veiculos' => array(self::MANY_MANY, 'Veiculo', 'veiculo_analise(fk_id_analise, fk_id_veiculo)'),
		);
	}

	public function pivotModels() {
		return array(
			'tags' => 'AnaliseTag',
			'veiculos' => 'VeiculoAnalise',
		);
	}

	public function attributeLabels() {
		return array(
			'id_analise' => Yii::t('app', 'Id Analise'),
			'ref_analise' => Yii::t('app', 'Ref Analise'),
			'nome_analise' => Yii::t('app', 'Nome Analise'),
			'descricao_analise' => Yii::t('app', 'Descricao Analise'),
			'imagem_analise' => Yii::t('app', 'Imagem Analise'),
			'ativo_analise' => Yii::t('app', 'Ativo Analise'),
			'tags' => null,
			'veiculos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_analise', $this->id_analise);
		$criteria->compare('ref_analise', $this->ref_analise, true);
		$criteria->compare('nome_analise', $this->nome_analise, true);
		$criteria->compare('descricao_analise', $this->descricao_analise, true);
		$criteria->compare('imagem_analise', $this->imagem_analise, true);
		$criteria->compare('ativo_analise', $this->ativo_analise);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}