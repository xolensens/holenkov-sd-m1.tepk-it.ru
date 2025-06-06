<?php

use app\models\Workshop;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WorkshopSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Цехи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workshop-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать новый цех', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_workshop',
            'workshop_type_id',
            'name',
            'count_of_workers',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Workshop $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_workshop' => $model->id_workshop]);
                 }
            ],
        ],
    ]); ?>


</div>
