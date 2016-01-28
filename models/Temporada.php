<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temporada".
 *
 * @property string $temporada_id
 * @property integer $anio
 * @property string $fruto
 * @property integer $precio
 *
 * @property TempEmplado[] $tempEmplados
 */
class Temporada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'temporada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anio', 'fruto', 'precio'], 'required'],
            [['anio', 'precio'], 'integer'],
            [['fruto'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'temporada_id' => 'Temporada ID',
            'anio' => 'Anio',
            'fruto' => 'Fruto',
            'precio' => 'Precio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempEmplados()
    {
        return $this->hasMany(TempEmplado::className(), ['temporada_id' => 'temporada_id']);
    }
}
