<?php

Yii::import('application.models._base.BaseVeiculo');

class Veiculo extends BaseVeiculo
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}