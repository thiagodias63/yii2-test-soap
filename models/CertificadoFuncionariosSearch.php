<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CertificadosFuncionarios;

/**
 * CertificadoFuncionariosSearch represents the model behind the search form of `app\models\CertificadosFuncionarios`.
 */
class CertificadoFuncionariosSearch extends CertificadosFuncionarios
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_certificado', 'cod_funcionario'], 'integer'],
            [['nome_certificado', 'emissao_certificado', 'vencimento_certificado', 'arquivo'], 'safe'],
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
        $query = CertificadosFuncionarios::find();

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
            'id_certificado' => $this->id_certificado,
            'emissao_certificado' => $this->emissao_certificado,
            'vencimento_certificado' => $this->vencimento_certificado,
            'cod_funcionario' => $this->cod_funcionario,
        ]);

        $query->andFilterWhere(['like', 'nome_certificado', $this->nome_certificado])
            ->andFilterWhere(['like', 'arquivo', $this->arquivo]);

        return $dataProvider;
    }
}
