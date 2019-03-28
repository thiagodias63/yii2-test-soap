<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CategoriaServico */

$this->title = 'Update Categoria Servico: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Categoria Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_categoria, 'url' => ['view', 'id' => $model->id_categoria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categoria-servico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
