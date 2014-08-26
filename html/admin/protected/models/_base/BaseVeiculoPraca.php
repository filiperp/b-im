<?php

/**
 * This is the model base class for the table "veiculo_praca".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "VeiculoPraca".
 *
 * Columns in table "veiculo_praca" available as properties of the model,
 * followed by relations of table "veiculo_praca" available as properties of the model.
 *
 * @property integer $fk_id_veiculo
 * @property integer $fk_id_praca
 *
 * @property VeiculoPracaPrograma[] $veiculoPracaProgramas
 * @property VeiculoPracaPrograma[] $veiculoPracaProgramas1
 */
abstract class BaseVeiculoPraca extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'veiculo_praca';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'VeiculoPraca|VeiculoPracas', $n);
	}

	public static function representingColumn() {
		return array(
			'fk_id_veiculo',
			'fk_id_praca',
		);
	}

	public function rules() {
		return array(
			array('fk_id_veiculo, fk_id_praca', 'required'),
			array('fk_id_veiculo, fk_id_praca', 'numerical', 'integerOnly'=>true),
			array('fk_id_veiculo, fk_id_praca', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'veiculoPracaProgramas' => array(self::HAS_MANY, 'VeiculoPracaPrograma', 'fk_id_veiculo'),
			'veiculoPracaProgramas1' => array(self::HAS_MANY, 'VeiculoPracaPrograma', 'fk_id_praca'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'fk_id_veiculo' => null,
			'fk_id_praca' => null,
			'veiculoPracaProgramas' => null,
			'veiculoPracaProgramas1' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('fk_id_veiculo', $this->fk_id_veiculo);
		$criteria->compare('fk_id_praca', $this->fk_id_praca);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}