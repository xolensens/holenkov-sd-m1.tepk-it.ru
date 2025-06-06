<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Workshop $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Цехи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="workshop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id_workshop' => $model->id_workshop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_workshop' => $model->id_workshop], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_workshop',
            'workshop_type_id',
            'name',
            'count_of_workers',
        ],
    ]) ?>

</div>
