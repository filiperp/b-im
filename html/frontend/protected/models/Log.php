<?php

/**
 * This is the model class for table "log".
 *
 * The followings are the available columns in table 'log':
 * @property integer $id_log
 * @property string $usuario_log
 * @property string $ip_log
 * @property string $acao_log
 * @property string $ref_log
 * @property string $data_log
 * @property string $descricao_log
 */
class Log extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_log, ip_log, acao_log, ref_log, data_log, descricao_log', 'required'),
			array('usuario_log', 'length', 'max'=>50),
			array('ip_log, acao_log, ref_log', 'length', 'max'=>45),
			array('descricao_log', 'length', 'max'=>512),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_log, usuario_log, ip_log, acao_log, ref_log, data_log, descricao_log', 'safe', 'on'=>'search'),
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
			'id_log' => 'Id Log',
			'usuario_log' => 'Usuario Log',
			'ip_log' => 'Ip Log',
			'acao_log' => 'Acao Log',
			'ref_log' => 'Ref Log',
			'data_log' => 'Data Log',
			'descricao_log' => 'Descricao Log',
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

		$criteria->compare('id_log',$this->id_log);
		$criteria->compare('usuario_log',$this->usuario_log,true);
		$criteria->compare('ip_log',$this->ip_log,true);
		$criteria->compare('acao_log',$this->acao_log,true);
		$criteria->compare('ref_log',$this->ref_log,true);
		$criteria->compare('data_log',$this->data_log,true);
		$criteria->compare('descricao_log',$this->descricao_log,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Log the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
