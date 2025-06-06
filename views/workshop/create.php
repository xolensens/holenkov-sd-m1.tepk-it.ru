<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Workshop $model */

$this->title = 'Создать цех';
$this->params['breadcrumbs'][] = ['label' => 'Цехи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workshop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
