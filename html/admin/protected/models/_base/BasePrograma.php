<?php

/**
 * This is the model base class for the table "programa".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Programa".
 *
 * Columns in table "programa" available as properties of the model,
 * followed by relations of table "programa" available as properties of the model.
 *
 * @property integer $id_programa
 * @property string $ref_programa
 * @property string $nome_programa
 * @property string $descricao_programa
 * @property string $imagem_programa
 * @property integer $ativo_programa
 *
 * @property Tag[] $tags
 * @property VeiculoPracaPrograma[] $veiculoPracaProgramas
 */
abstract class BasePrograma extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'programa';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Prog. & Cont.|Prog. & Cont.', $n);
	}

	public static function representingColumn() {
		return 'nome_programa';
	}

	public function rules() {
		return array(
			array('ref_programa, nome_programa, descricao_programa, imagem_programa, ativo_programa', 'required'),
			array('ativo_programa', 'numerical', 'integerOnly'=>true),
			array('ref_programa', 'length', 'max'=>45),
            array('ref_programa','unique', 'message'=>'Essa Chave Já existe.'),

            array('nome_programa', 'length', 'max'=>100),
			array('descricao_programa', 'length', 'max'=>512),
			array('imagem_programa', 'length', 'max'=>255),
			array('id_programa, ref_programa, nome_programa, descricao_programa, imagem_programa, ativo_programa', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tags' => array(self::MANY_MANY, 'Tag', 'programa_tag(fk_id_programa, fk_id_tag)'),
			'veiculoPracaProgramas' => array(self::HAS_MANY, 'VeiculoPracaPrograma', 'fk_id_programa'),
		);
	}

	public function pivotModels() {
		return array(
			'tags' => 'ProgramaTag',
		);
	}

	public function attributeLabels() {
		return array(
			'id_programa' => Yii::t('app', 'Id'),
			'ref_programa' => Yii::t('app', 'Ref'),
			'nome_programa' => Yii::t('app', 'Nome'),
			'descricao_programa' => Yii::t('app', 'Descricao'),
			'imagem_programa' => Yii::t('app', 'Imagem'),
			'ativo_programa' => Yii::t('app', 'Ativo'),
			'tags' => null,
			'veiculoPracaProgramas' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_programa', $this->id_programa);
		$criteria->compare('ref_programa', $this->ref_programa, true);
		$criteria->compare('nome_programa', $this->nome_programa, true);
		$criteria->compare('descricao_programa', $this->descricao_programa, true);
		$criteria->compare('imagem_programa', $this->imagem_programa, true);
		$criteria->compare('ativo_programa', $this->ativo_programa);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}