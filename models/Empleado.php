<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property string $empleado_id
 * @property string $nombre
 * @property string $apellido
 * @property integer $rut
 * @property integer $telefono
 *
 * @property Cosechadia[] $cosechadias
 * @property TempEmplado[] $tempEmplados
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'rut', 'telefono'], 'required'],
            [['rut', 'telefono'], 'integer'],
            [['nombre', 'apellido'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'empleado_id' => 'Empleado ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'rut' => 'Rut',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCosechadias()
    {
        return $this->hasMany(Cosechadia::className(), ['empleado_id' => 'empleado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempEmplados()
    {
        return $this->hasMany(TempEmplado::className(), ['empleado_id' => 'empleado_id']);
    }
}
