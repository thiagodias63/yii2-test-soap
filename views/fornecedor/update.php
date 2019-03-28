<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fornecedor */

$this->title = 'Update Fornecedor: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Fornecedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_fornecedor, 'url' => ['view', 'id' => $model->id_fornecedor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fornecedor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
