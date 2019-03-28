<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificadosFuncionarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="certificados-funcionarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_certificado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emissao_certificado')->textInput() ?>

    <?= $form->field($model, 'vencimento_certificado')->textInput() ?>

    <?= $form->field($model, 'arquivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_funcionario')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
