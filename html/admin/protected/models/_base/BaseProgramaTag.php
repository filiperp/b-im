<?php

/**
 * This is the model base class for the table "programa_tag".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ProgramaTag".
 *
 * Columns in table "programa_tag" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $fk_id_programa
 * @property integer $fk_id_tag
 *
 */
abstract class BaseProgramaTag extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'programa_tag';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ProgramaTag|ProgramaTags', $n);
	}

	public static function representingColumn() {
		return array(
			'fk_id_programa',
			'fk_id_tag',
		);
	}

	public function rules() {
		return array(
			array('fk_id_programa, fk_id_tag', 'required'),
			array('fk_id_programa, fk_id_tag', 'numerical', 'integerOnly'=>true),
			array('fk_id_programa, fk_id_tag', 'safe', 'on'=>'search'),
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
			'fk_id_programa' => null,
			'fk_id_tag' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('fk_id_programa', $this->fk_id_programa);
		$criteria->compare('fk_id_tag', $this->fk_id_tag);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}