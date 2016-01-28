<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tempempleado;

/**
 * TempempleadoSearch represents the model behind the search form about `app\models\Tempempleado`.
 */
class TempempleadoSearch extends Tempempleado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['temp_empleado_id', 'temporada_id', 'empleado_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tempempleado::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'temp_empleado_id' => $this->temp_empleado_id,
            'temporada_id' => $this->temporada_id,
            'empleado_id' => $this->empleado_id,
        ]);

        return $dataProvider;
    }
}
