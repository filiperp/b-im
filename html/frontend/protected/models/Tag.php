<?php

/**
 * This is the model class for table "tag".
 *
 * The followings are the available columns in table 'tag':
 * @property integer $id_tag
 * @property string $ref_tag
 * @property string $nome_tag
 * @property string $tipo_tag
 *
 * The followings are the available model relations:
 * @property Analise[] $analises
 * @property Arquivo[] $arquivos
 * @property Estudo[] $estudos
 * @property Programa[] $programas
 * @property Veiculo[] $veiculos
 */
class Tag extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tag';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_tag, tipo_tag', 'required'),
			array('ref_tag, nome_tag, tipo_tag', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tag, ref_tag, nome_tag, tipo_tag', 'safe', 'on'=>'search'),
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
			'analises' => array(self::MANY_MANY, 'Analise', 'analise_tag(fk_id_tag, fk_id_analise)'),
			'arquivos' => array(self::MANY_MANY, 'Arquivo', 'arquivo_tag(fk_id_tag, fk_id_arquivo)'),
			'estudos' => array(self::MANY_MANY, 'Estudo', 'estudo_has_tag(tag_id_tag, estudo_id_estudo)'),
			'programas' => array(self::MANY_MANY, 'Programa', 'programa_tag(fk_id_tag, fk_id_programa)'),
			'veiculos' => array(self::MANY_MANY, 'Veiculo', 'veiculo_tag(tag_id_tag, veiculo_id_veiculo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tag' => 'Id Tag',
			'ref_tag' => 'Ref Tag',
			'nome_tag' => 'Nome Tag',
			'tipo_tag' => 'Tipo Tag',
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

		$criteria->compare('id_tag',$this->id_tag);
		$criteria->compare('ref_tag',$this->ref_tag,true);
		$criteria->compare('nome_tag',$this->nome_tag,true);
		$criteria->compare('tipo_tag',$this->tipo_tag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tag the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
