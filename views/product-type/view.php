<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ProductType $model */

$this->title = $model->id_product_type;
$this->params['breadcrumbs'][] = ['label' => 'Типы продуктов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id_product_type' => $model->id_product_type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_product_type' => $model->id_product_type], [
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
            'id_product_type',
            'name_type',
            'coefficient',
        ],
    ]) ?>

</div>
