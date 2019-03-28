<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CategoriaServicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categoria-servico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_categoria') ?>

    <?= $form->field($model, 'desc_categoria') ?>

    <?= $form->field($model, 'id_um') ?>

    <?= $form->field($model, 'precisa_circular') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
