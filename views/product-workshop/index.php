<?php

use app\models\ProductWorkshop;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductWorkshopSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Product Workshops';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-workshop-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать продукцию мастерской', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_product_workshop',
            'product_id',
            'workshop_id',
            'hours',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProductWorkshop $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_product_workshop' => $model->id_product_workshop]);
                 }
            ],
        ],
    ]); ?>


</div>
