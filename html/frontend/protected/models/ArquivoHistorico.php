<?php

/**
 * This is the model class for table "arquivo_historico".
 *
 * The followings are the available columns in table 'arquivo_historico':
 * @property integer $id_arquivo_historico
 * @property integer $fk_id_arquivo
 * @property string $ref_arquivo
 * @property string $nome_arquivo
 * @property string $caminho_arquivo
 * @property string $usuario
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Arquivo $fkIdArquivo
 */
class ArquivoHistorico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arquivo_historico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_id_arquivo, ref_arquivo, nome_arquivo, caminho_arquivo, usuario, data', 'required'),
			array('fk_id_arquivo', 'numerical', 'integerOnly'=>true),
			array('ref_arquivo, usuario', 'length', 'max'=>45),
			array('nome_arquivo', 'length', 'max'=>100),
			array('caminho_arquivo', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_arquivo_historico, fk_id_arquivo, ref_arquivo, nome_arquivo, caminho_arquivo, usuario, data', 'safe', 'on'=>'search'),
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
			'fkIdArquivo' => array(self::BELONGS_TO, 'Arquivo', 'fk_id_arquivo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_arquivo_historico' => 'Id Arquivo Historico',
			'fk_id_arquivo' => 'Fk Id Arquivo',
			'ref_arquivo' => 'Ref Arquivo',
			'nome_arquivo' => 'Nome Arquivo',
			'caminho_arquivo' => 'Caminho Arquivo',
			'usuario' => 'Usuario',
			'data' => 'Data',
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

		$criteria->compare('id_arquivo_historico',$this->id_arquivo_historico);
		$criteria->compare('fk_id_arquivo',$this->fk_id_arquivo);
		$criteria->compare('ref_arquivo',$this->ref_arquivo,true);
		$criteria->compare('nome_arquivo',$this->nome_arquivo,true);
		$criteria->compare('caminho_arquivo',$this->caminho_arquivo,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArquivoHistorico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
