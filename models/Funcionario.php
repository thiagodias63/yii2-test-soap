<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property string $cod_funcionario
 *
 * @property CertificadosFuncionarios[] $certificadosFuncionarios
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cod_funcionario' => 'Cod Funcionario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCertificadosFuncionarios()
    {
        return $this->hasMany(CertificadosFuncionarios::className(), ['cod_funcionario' => 'cod_funcionario']);
    }
}
