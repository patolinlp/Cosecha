<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temp_emplado".
 *
 * @property integer $temp_empleado_id
 * @property string $temporada_id
 * @property string $empleado_id
 *
 * @property Empleado $empleado
 * @property Temporada $temporada
 */
class Tempempleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temp_emplado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['temporada_id', 'empleado_id'], 'required'],
            [['temporada_id', 'empleado_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'temp_empleado_id' => 'Temp Empleado ID',
            'temporada_id' => 'Temporada ID',
            'empleado_id' => 'Empleado ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::className(), ['empleado_id' => 'empleado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTemporada()
    {
        return $this->hasOne(Temporada::className(), ['temporada_id' => 'temporada_id']);
    }
}
