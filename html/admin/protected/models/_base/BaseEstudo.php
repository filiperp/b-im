<?php

/**
 * This is the model base class for the table "estudo".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Estudo".
 *
 * Columns in table "estudo" available as properties of the model,
 * followed by relations of table "estudo" available as properties of the model.
 *
 * @property integer $id_estudo
 * @property string $ref_estudo
 * @property string $nome_estudo
 * @property string $caminho_estudo
 * @property integer $ativo_estudo
 * @property integer $cliente_id_cliente
 *
 * @property Cliente $clienteIdCliente
 */
abstract class BaseEstudo extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'estudo';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Estudo|Estudos', $n);
	}

	public static function representingColumn() {
		return 'ref_estudo';
	}

	public function rules() {
		return array(
			array('ref_estudo, nome_estudo, caminho_estudo, ativo_estudo, cliente_id_cliente', 'required'),
			array('ativo_estudo, cliente_id_cliente', 'numerical', 'integerOnly'=>true),
			array('ref_estudo', 'length', 'max'=>45),
			array('nome_estudo', 'length', 'max'=>100),
			array('caminho_estudo', 'length', 'max'=>255),
			array('id_estudo, ref_estudo, nome_estudo, caminho_estudo, ativo_estudo, cliente_id_cliente', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'clienteIdCliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id_cliente'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_estudo' => Yii::t('app', 'Id Estudo'),
			'ref_estudo' => Yii::t('app', 'Ref Estudo'),
			'nome_estudo' => Yii::t('app', 'Nome Estudo'),
			'caminho_estudo' => Yii::t('app', 'Caminho Estudo'),
			'ativo_estudo' => Yii::t('app', 'Ativo Estudo'),
			'cliente_id_cliente' => null,
			'clienteIdCliente' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_estudo', $this->id_estudo);
		$criteria->compare('ref_estudo', $this->ref_estudo, true);
		$criteria->compare('nome_estudo', $this->nome_estudo, true);
		$criteria->compare('caminho_estudo', $this->caminho_estudo, true);
		$criteria->compare('ativo_estudo', $this->ativo_estudo);
		$criteria->compare('cliente_id_cliente', $this->cliente_id_cliente);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}