<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parcela_lancamento".
 *
 * @property string $id_parcela
 * @property double $valor_bruto
 * @property double $valor_liquido
 * @property double $valor_desconto
 * @property int $percentual_desconto
 * @property string $data_pagamento
 * @property string $data_vencimento
 * @property string $id_lancamento
 * @property string $id_forma_pagamento
 *
 * @property Lancamento $lancamento
 * @property FormaPagamento $formaPagamento
 */
class ParcelaLancamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parcela_lancamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valor_bruto', 'valor_liquido', 'valor_desconto'], 'number'],
            [['percentual_desconto', 'id_lancamento', 'id_forma_pagamento'], 'integer'],
            [['data_pagamento', 'data_vencimento'], 'safe'],
            [['id_lancamento', 'id_forma_pagamento'], 'required'],
            [['id_lancamento'], 'exist', 'skipOnError' => true, 'targetClass' => Lancamento::className(), 'targetAttribute' => ['id_lancamento' => 'id_lancamento']],
            [['id_forma_pagamento'], 'exist', 'skipOnError' => true, 'targetClass' => FormaPagamento::className(), 'targetAttribute' => ['id_forma_pagamento' => 'id_forma_pagamento']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_parcela' => 'Id Parcela',
            'valor_bruto' => 'Valor Bruto',
            'valor_liquido' => 'Valor Liquido',
            'valor_desconto' => 'Valor Desconto',
            'percentual_desconto' => 'Percentual Desconto',
            'data_pagamento' => 'Data Pagamento',
            'data_vencimento' => 'Data Vencimento',
            'id_lancamento' => 'Id Lancamento',
            'id_forma_pagamento' => 'Id Forma Pagamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLancamento()
    {
        return $this->hasOne(Lancamento::className(), ['id_lancamento' => 'id_lancamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormaPagamento()
    {
        return $this->hasOne(FormaPagamento::className(), ['id_forma_pagamento' => 'id_forma_pagamento']);
    }
}
