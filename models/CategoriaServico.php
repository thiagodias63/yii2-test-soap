<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria_servico".
 *
 * @property string $id_categoria
 * @property string $desc_categoria
 * @property string $id_um
 * @property int $precisa_circular
 */
class CategoriaServico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria_servico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_categoria', 'id_um'], 'required'],
            [['id_um'], 'integer'],
            [['desc_categoria'], 'string', 'max' => 200],
            [['precisa_circular'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_categoria' => 'Id Categoria',
            'desc_categoria' => 'Desc Categoria',
            'id_um' => 'Id Um',
            'precisa_circular' => 'Precisa Circular',
        ];
    }
}
