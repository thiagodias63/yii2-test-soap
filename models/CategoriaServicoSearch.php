<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CategoriaServico;

/**
 * CategoriaServicoSearch represents the model behind the search form of `app\models\CategoriaServico`.
 */
class CategoriaServicoSearch extends CategoriaServico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_categoria', 'id_um'], 'integer'],
            [['desc_categoria', 'precisa_circular'], 'safe'],
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
        $query = CategoriaServico::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_categoria' => $this->id_categoria,
            'id_um' => $this->id_um,
        ]);

        $query->andFilterWhere(['like', 'desc_categoria', $this->desc_categoria])
            ->andFilterWhere(['like', 'precisa_circular', $this->precisa_circular]);

        return $dataProvider;
    }
}
