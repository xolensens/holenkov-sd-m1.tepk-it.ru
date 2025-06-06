<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Workshop $model */

$this->title = 'Update Workshop: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Workshops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_workshop' => $model->id_workshop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workshop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
