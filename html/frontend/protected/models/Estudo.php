<?php

/**
 * This is the model class for table "estudo".
 *
 * The followings are the available columns in table 'estudo':
 * @property integer $id_estudo
 * @property string $ref_estudo
 * @property string $nome_estudo
 * @property string $caminho_estudo
 * @property integer $ativo_estudo
 * @property integer $cliente_id_cliente
 *
 * The followings are the available model relations:
 * @property Cliente $clienteIdCliente
 * @property Tag[] $tags
 * @property Veiculo[] $veiculos
 */
class Estudo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estudo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_estudo, nome_estudo, caminho_estudo, ativo_estudo, cliente_id_cliente', 'required'),
			array('ativo_estudo, cliente_id_cliente', 'numerical', 'integerOnly'=>true),
			array('ref_estudo', 'length', 'max'=>45),
			array('nome_estudo', 'length', 'max'=>100),
			array('caminho_estudo', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_estudo, ref_estudo, nome_estudo, caminho_estudo, ativo_estudo, cliente_id_cliente', 'safe', 'on'=>'search'),
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
			'clienteIdCliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id_cliente'),
			'tags' => array(self::MANY_MANY, 'Tag', 'estudo_has_tag(estudo_id_estudo, tag_id_tag)'),
			'veiculos' => array(self::MANY_MANY, 'Veiculo', 'veiculo_has_estudo(estudo_id_estudo, veiculo_id_veiculo)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estudo' => 'Id Estudo',
			'ref_estudo' => 'Ref Estudo',
			'nome_estudo' => 'Nome Estudo',
			'caminho_estudo' => 'Caminho Estudo',
			'ativo_estudo' => 'Ativo Estudo',
			'cliente_id_cliente' => 'Cliente Id Cliente',
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

		$criteria->compare('id_estudo',$this->id_estudo);
		$criteria->compare('ref_estudo',$this->ref_estudo,true);
		$criteria->compare('nome_estudo',$this->nome_estudo,true);
		$criteria->compare('caminho_estudo',$this->caminho_estudo,true);
		$criteria->compare('ativo_estudo',$this->ativo_estudo);
		$criteria->compare('cliente_id_cliente',$this->cliente_id_cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estudo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function getLink()
    {
        if (!isset ($this->tags[0])) return;
        switch ($this->tags[0]['ref_tag']) {
            case 'vimeo':
                return 'http://vimeo.com/' . $this->caminho_estudo;
                break;
            case 'youtube':
                return 'http://www.youtube.com/watch?v=' . $this->caminho_estudo;
                break;
            case 'pdf':
            case 'doc':
            case 'xls':
            case 'ppt':
                return Yii::app()->baseUrl . '/' . $this->caminho_estudo;
                break;

        }
    }

    public function getBaseTag()
    {
        if (!isset ($this->tags[0])) return 'pdf';
        return $this->tags[0]['ref_tag'];
    }

    public function getName()
    {
        if (!isset ($this->tags[0])) return 'SEM TAG';

        return $this->tags[0]['nome_tag'];
    }
}
