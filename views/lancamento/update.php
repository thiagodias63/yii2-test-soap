<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lancamento */

$this->title = 'Update Lancamento: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Lancamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lancamento, 'url' => ['view', 'id' => $model->id_lancamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lancamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
