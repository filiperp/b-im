<?php

/**
 * This is the model base class for the table "praca".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Praca".
 *
 * Columns in table "praca" available as properties of the model,
 * followed by relations of table "praca" available as properties of the model.
 *
 * @property integer $id_praca
 * @property string $ref_praca
 * @property string $nome_praca
 * @property string $descricao_praca
 * @property integer $ativo_praca
 *
 * @property Veiculo[] $veiculos
 */
abstract class BasePraca extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'praca';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Praca|Pracas', $n);
	}

	public static function representingColumn() {
		return 'nome_praca';
	}

	public function rules() {
		return array(
			array('ref_praca, nome_praca, descricao_praca, ativo_praca', 'required'),
			array('ativo_praca', 'numerical', 'integerOnly'=>true),
			array('ref_praca', 'length', 'max'=>45),
			array('nome_praca', 'length', 'max'=>100),
			array('descricao_praca', 'length', 'max'=>512),
			array('id_praca, ref_praca, nome_praca, descricao_praca, ativo_praca', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'veiculos' => array(self::MANY_MANY, 'Veiculo', 'veiculo_praca(fk_id_praca, fk_id_veiculo)'),
		);
	}

	public function pivotModels() {
		return array(
			'veiculos' => 'VeiculoPraca',
		);
	}

	public function attributeLabels() {
		return array(
			'id_praca' => Yii::t('app', 'Id'),
			'ref_praca' => Yii::t('app', 'Ref'),
			'nome_praca' => Yii::t('app', 'Nome'),
			'descricao_praca' => Yii::t('app', 'Descricao'),
			'ativo_praca' => Yii::t('app', 'Ativo'),
			'veiculos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_praca', $this->id_praca);
		$criteria->compare('ref_praca', $this->ref_praca, true);
		$criteria->compare('nome_praca', $this->nome_praca, true);
		$criteria->compare('descricao_praca', $this->descricao_praca, true);
		$criteria->compare('ativo_praca', $this->ativo_praca);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}