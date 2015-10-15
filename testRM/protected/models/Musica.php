<?php

/**
 * This is the model class for table "musica".
 *
 * The followings are the available columns in table 'musica':
 * @property integer $id
 * @property string $cancion
 * @property string $grupo
 * @property string $genero
 * @property string $video
 * @property string $usuario
 */
class Musica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'musica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cancion, grupo, genero, usuario', 'length', 'max'=>25),
			array('video', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cancion, grupo, genero, video, usuario', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'cancion' => 'Cancion',
			'grupo' => 'Grupo',
			'genero' => 'Genero',
			'video' => 'Video',
			'usuario' => 'Usuario',
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
 		
 		$usuario = Yii::app()->user->name;
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cancion',$this->cancion,true);
		$criteria->compare('grupo',$this->grupo,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('usuario',$usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Musica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
