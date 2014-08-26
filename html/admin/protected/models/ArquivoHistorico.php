<?php

Yii::import('application.models._base.BaseArquivoHistorico');

class ArquivoHistorico extends BaseArquivoHistorico
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}