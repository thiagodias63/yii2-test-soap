<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fornecedor".
 *
 * @property string $id_fornecedor
 * @property string $cnpj_fornecedor
 * @property string $nome_fornecedor
 *
 * @property Lancamento[] $lancamentos
 */
class Fornecedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fornecedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cnpj_fornecedor'], 'string', 'max' => 14],
            [['nome_fornecedor'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_fornecedor' => 'Id Fornecedor',
            'cnpj_fornecedor' => 'Cnpj Fornecedor',
            'nome_fornecedor' => 'Nome Fornecedor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLancamentos()
    {
        return $this->hasMany(Lancamento::className(), ['id_fornecedor' => 'id_fornecedor']);
    }
}
