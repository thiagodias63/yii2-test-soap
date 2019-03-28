<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lancamento".
 *
 * @property string $id_lancamento
 * @property string $numero_documento
 * @property double $valor_total
 * @property string $id_fornecedor
 *
 * @property Fornecedor $fornecedor
 * @property ParcelaLancamento[] $parcelaLancamentos
 */
class Lancamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lancamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero_documento', 'id_fornecedor'], 'required'],
            [['valor_total'], 'number'],
            [['id_fornecedor'], 'integer'],
            [['numero_documento'], 'string', 'max' => 30],
            [['id_fornecedor'], 'exist', 'skipOnError' => true, 'targetClass' => Fornecedor::className(), 'targetAttribute' => ['id_fornecedor' => 'id_fornecedor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_lancamento' => 'Id Lancamento',
            'numero_documento' => 'Numero Documento',
            'valor_total' => 'Valor Total',
            'id_fornecedor' => 'Id Fornecedor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFornecedor()
    {
        return $this->hasOne(Fornecedor::className(), ['id_fornecedor' => 'id_fornecedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParcelaLancamentos()
    {
        return $this->hasMany(ParcelaLancamento::className(), ['id_lancamento' => 'id_lancamento']);
    }
}
