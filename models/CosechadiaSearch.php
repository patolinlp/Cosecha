<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cosechadia;

/**
 * CosechadiaSearch represents the model behind the search form about `app\models\Cosechadia`.
 */
class CosechadiaSearch extends Cosechadia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cosechadia_id', 'empleado_id', 'cantidad', 'total', 'pagado'], 'integer'],
            [['fecha'], 'safe'],
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
        $query = Cosechadia::find();

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
            'cosechadia_id' => $this->cosechadia_id,
            'empleado_id' => $this->empleado_id,
            'fecha' => $this->fecha,
            'cantidad' => $this->cantidad,
            'total' => $this->total,
            'pagado' => $this->pagado,
        ]);

        return $dataProvider;
    }
}
