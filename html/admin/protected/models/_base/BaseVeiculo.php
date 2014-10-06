<?php

/**
 * This is the model base class for the table "veiculo".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Veiculo".
 *
 * Columns in table "veiculo" available as properties of the model,
 * followed by relations of table "veiculo" available as properties of the model.
 *
 * @property integer $id_veiculo
 * @property string $ref_veiculo
 * @property string $nome_veiculo
 * @property string $descricao_veiculo
 * @property string $imagem_veiculo
 * @property integer $ativo_veiculo
 *
 * @property Analise[] $analises
 * @property Estudo[] $estudos
 * @property Praca[] $pracas
 * @property Tag[] $tags
 */
abstract class BaseVeiculo extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'veiculo';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Veiculo|Veiculos', $n);
	}

	public static function representingColumn() {
		return 'ref_veiculo';
	}

	public function rules() {
		return array(
			array('ref_veiculo, nome_veiculo, descricao_veiculo, imagem_veiculo, ativo_veiculo', 'required'),
			array('ativo_veiculo', 'numerical', 'integerOnly'=>true),
			array('ref_veiculo', 'length', 'max'=>45),
			array('nome_veiculo', 'length', 'max'=>100),
			array('descricao_veiculo', 'length', 'max'=>512),
			array('imagem_veiculo', 'length', 'max'=>255),
			array('id_veiculo, ref_veiculo, nome_veiculo, descricao_veiculo, imagem_veiculo, ativo_veiculo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'analises' => array(self::MANY_MANY, 'Analise', 'veiculo_analise(fk_id_veiculo, fk_id_analise)'),
			'estudos' => array(self::MANY_MANY, 'Estudo', 'veiculo_has_estudo(veiculo_id_veiculo, estudo_id_estudo)'),
			'pracas' => array(self::MANY_MANY, 'Praca', 'veiculo_praca(fk_id_veiculo, fk_id_praca)'),
			'tags' => array(self::MANY_MANY, 'Tag', 'veiculo_tag(veiculo_id_veiculo, tag_id_tag)'),
		);
	}

	public function pivotModels() {
		return array(
			'analises' => 'VeiculoAnalise',
			'estudos' => 'VeiculoHasEstudo',
			'pracas' => 'VeiculoPraca',
			'tags' => 'VeiculoTag',
		);
	}

	public function attributeLabels() {
		return array(
			'id_veiculo' => Yii::t('app', 'Id Veiculo'),
			'ref_veiculo' => Yii::t('app', 'Ref Veiculo'),
			'nome_veiculo' => Yii::t('app', 'Nome Veiculo'),
			'descricao_veiculo' => Yii::t('app', 'Descricao Veiculo'),
			'imagem_veiculo' => Yii::t('app', 'Imagem Veiculo'),
			'ativo_veiculo' => Yii::t('app', 'Ativo Veiculo'),
			'analises' => null,
			'estudos' => null,
			'pracas' => null,
			'tags' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_veiculo', $this->id_veiculo);
		$criteria->compare('ref_veiculo', $this->ref_veiculo, true);
		$criteria->compare('nome_veiculo', $this->nome_veiculo, true);
		$criteria->compare('descricao_veiculo', $this->descricao_veiculo, true);
		$criteria->compare('imagem_veiculo', $this->imagem_veiculo, true);
		$criteria->compare('ativo_veiculo', $this->ativo_veiculo);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}