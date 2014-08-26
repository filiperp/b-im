<?php

Yii::import('application.models._base.BaseNoticia');

class Noticia extends BaseNoticia
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}