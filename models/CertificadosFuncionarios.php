<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certificados_funcionarios".
 *
 * @property string $id_certificado
 * @property string $nome_certificado
 * @property string $emissao_certificado
 * @property string $vencimento_certificado
 * @property string $arquivo
 * @property string $cod_funcionario
 *
 * @property Funcionario $codFuncionario
 */
class CertificadosFuncionarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'certificados_funcionarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome_certificado', 'cod_funcionario'], 'required'],
            [['emissao_certificado', 'vencimento_certificado'], 'safe'],
            [['cod_funcionario'], 'integer'],
            [['nome_certificado'], 'string', 'max' => 200],
            [['arquivo'], 'string', 'max' => 250],
            [['cod_funcionario'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::className(), 'targetAttribute' => ['cod_funcionario' => 'cod_funcionario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_certificado' => 'Id Certificado',
            'nome_certificado' => 'Nome Certificado',
            'emissao_certificado' => 'Emissao Certificado',
            'vencimento_certificado' => 'Vencimento Certificado',
            'arquivo' => 'Arquivo',
            'cod_funcionario' => 'Cod Funcionario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionario()
    {
        return $this->hasOne(Funcionario::className(), ['cod_funcionario' => 'cod_funcionario']);
    }
}
