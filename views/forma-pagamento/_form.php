<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormaPagamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="forma-pagamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'desc_forma_pagamento')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
