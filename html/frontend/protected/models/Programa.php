<?php

/**
 * This is the model class for table "programa".
 *
 * The followings are the available columns in table 'programa':
 * @property integer $id_programa
 * @property string $ref_programa
 * @property string $nome_programa
 * @property string $descricao_programa
 * @property string $imagem_programa
 * @property integer $ativo_programa
 *
 * The followings are the available model relations:
 * @property Tag[] $tags
 * @property VeiculoPracaPrograma[] $veiculoPracaProgramas
 */
class Programa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'programa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ref_programa, nome_programa, descricao_programa, imagem_programa, ativo_programa', 'required'),
			array('ativo_programa', 'numerical', 'integerOnly'=>true),
			array('ref_programa', 'length', 'max'=>45),
			array('nome_programa', 'length', 'max'=>100),
			array('descricao_programa', 'length', 'max'=>512),
			array('imagem_programa', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_programa, ref_programa, nome_programa, descricao_programa, imagem_programa, ativo_programa', 'safe', 'on'=>'search'),
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
			'tags' => array(self::MANY_MANY, 'Tag', 'programa_tag(fk_id_programa, fk_id_tag)'),
			'veiculoPracaProgramas' => array(self::HAS_MANY, 'VeiculoPracaPrograma', 'fk_id_programa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_programa' => 'Id Programa',
			'ref_programa' => 'Ref Programa',
			'nome_programa' => 'Nome Programa',
			'descricao_programa' => 'Descricao Programa',
			'imagem_programa' => 'Imagem Programa',
			'ativo_programa' => 'Ativo Programa',
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

		$criteria->compare('id_programa',$this->id_programa);
		$criteria->compare('ref_programa',$this->ref_programa,true);
		$criteria->compare('nome_programa',$this->nome_programa,true);
		$criteria->compare('descricao_programa',$this->descricao_programa,true);
		$criteria->compare('imagem_programa',$this->imagem_programa,true);
		$criteria->compare('ativo_programa',$this->ativo_programa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Programa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function hasTag($ref)
    {



        foreach($this->tags as $tg){
            if($tg->ref_tag==$ref){
                return true;
            }
        }
        return false;

    }
}
