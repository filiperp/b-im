<?php

/**
 * This is the model class for table "noticia".
 *
 * The followings are the available columns in table 'noticia':
 * @property integer $id_noticia
 * @property string $ref_noticia
 * @property string $nome_noticia
 * @property string $descricao_noticia
 * @property string $link_noticia
 * @property integer $ativo_noticia
 * @property string $imagem_noticia
 */
class Noticia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'noticia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_noticia, nome_noticia, descricao_noticia, link_noticia, ativo_noticia, imagem_noticia', 'required'),
			array('ativo_noticia', 'numerical', 'integerOnly'=>true),
			array('ref_noticia', 'length', 'max'=>45),
			array('nome_noticia', 'length', 'max'=>100),
			array('descricao_noticia, link_noticia', 'length', 'max'=>512),
			array('imagem_noticia', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_noticia, ref_noticia, nome_noticia, descricao_noticia, link_noticia, ativo_noticia, imagem_noticia', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_noticia' => 'Id Noticia',
			'ref_noticia' => 'Ref Noticia',
			'nome_noticia' => 'Nome Noticia',
			'descricao_noticia' => 'Descricao Noticia',
			'link_noticia' => 'Link Noticia',
			'ativo_noticia' => 'Ativo Noticia',
			'imagem_noticia' => 'Imagem Noticia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_noticia',$this->id_noticia);
		$criteria->compare('ref_noticia',$this->ref_noticia,true);
		$criteria->compare('nome_noticia',$this->nome_noticia,true);
		$criteria->compare('descricao_noticia',$this->descricao_noticia,true);
		$criteria->compare('link_noticia',$this->link_noticia,true);
		$criteria->compare('ativo_noticia',$this->ativo_noticia);
		$criteria->compare('imagem_noticia',$this->imagem_noticia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Noticia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
