<?php

/**
 * This is the model base class for the table "noticia".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Noticia".
 *
 * Columns in table "noticia" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id_noticia
 * @property string $ref_noticia
 * @property string $nome_noticia
 * @property string $descricao_noticia
 * @property string $link_noticia
 * @property integer $ativo_noticia
 * @property string $imagem_noticia
 *
 */
abstract class BaseNoticia extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'noticia';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Noticia|Noticias', $n);
	}

	public static function representingColumn() {
		return 'ref_noticia';
	}

	public function rules() {
		return array(
			array('ref_noticia, nome_noticia, descricao_noticia, link_noticia, ativo_noticia, imagem_noticia', 'required'),
			array('ativo_noticia', 'numerical', 'integerOnly'=>true),
			array('ref_noticia', 'length', 'max'=>45),
			array('nome_noticia', 'length', 'max'=>100),
			array('descricao_noticia, link_noticia', 'length', 'max'=>512),
			array('imagem_noticia', 'length', 'max'=>255),
			array('id_noticia, ref_noticia, nome_noticia, descricao_noticia, link_noticia, ativo_noticia, imagem_noticia', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_noticia' => Yii::t('app', 'Id'),
			'ref_noticia' => Yii::t('app', 'Ref'),
			'nome_noticia' => Yii::t('app', 'Nome'),
			'descricao_noticia' => Yii::t('app', 'Descricao'),
			'link_noticia' => Yii::t('app', 'Link'),
			'ativo_noticia' => Yii::t('app', 'Ativo'),
			'imagem_noticia' => Yii::t('app', 'Imagem'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_noticia', $this->id_noticia);
		$criteria->compare('ref_noticia', $this->ref_noticia, true);
		$criteria->compare('nome_noticia', $this->nome_noticia, true);
		$criteria->compare('descricao_noticia', $this->descricao_noticia, true);
		$criteria->compare('link_noticia', $this->link_noticia, true);
		$criteria->compare('ativo_noticia', $this->ativo_noticia);
		$criteria->compare('imagem_noticia', $this->imagem_noticia, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}