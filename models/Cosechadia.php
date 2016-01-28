<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cosechadia".
 *
 * @property string $cosechadia_id
 * @property string $empleado_id
 * @property string $fecha
 * @property integer $cantidad
 * @property integer $total
 * @property integer $pagado
 *
 * @property Empleado $empleado
 */
class Cosechadia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cosechadia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empleado_id', 'fecha', 'cantidad', 'total'], 'required'],
            [['empleado_id', 'cantidad', 'total', 'pagado'], 'integer'],
            [['fecha'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cosechadia_id' => 'Cosechadia ID',
            'empleado_id' => 'Empleado ID',
            'fecha' => 'Fecha',
            'cantidad' => 'Cantidad',
            'total' => 'Total',
            'pagado' => 'Pagado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::className(), ['empleado_id' => 'empleado_id']);
    }
}
