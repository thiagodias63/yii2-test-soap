<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forma_pagamento".
 *
 * @property string $id_forma_pagamento
 * @property string $desc_forma_pagamento
 *
 * @property ParcelaLancamento[] $parcelaLancamentos
 */
class FormaPagamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forma_pagamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_forma_pagamento'], 'required'],
            [['desc_forma_pagamento'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_forma_pagamento' => 'Id Forma Pagamento',
            'desc_forma_pagamento' => 'Desc Forma Pagamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParcelaLancamentos()
    {
        return $this->hasMany(ParcelaLancamento::className(), ['id_forma_pagamento' => 'id_forma_pagamento']);
    }
}
