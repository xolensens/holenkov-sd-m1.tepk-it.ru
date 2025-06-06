<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductType $model */

$this->title = 'Создание типа продукта';
$this->params['breadcrumbs'][] = ['label' => 'Типы продуктов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
