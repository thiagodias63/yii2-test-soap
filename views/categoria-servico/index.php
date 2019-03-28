<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriaServicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categoria Servicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-servico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Categoria Servico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_categoria',
            'desc_categoria',
            'id_um',
            'precisa_circular',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
