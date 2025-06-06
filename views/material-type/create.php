<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MaterialType $model */

$this->title = 'Создание типа материалов';
$this->params['breadcrumbs'][] = ['label' => 'Тип материала', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
