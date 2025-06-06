<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WorkshopType $model */

$this->title = 'Update Workshop Type: ' . $model->id_workshop_type;
$this->params['breadcrumbs'][] = ['label' => 'Workshop Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_workshop_type, 'url' => ['view', 'id_workshop_type' => $model->id_workshop_type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workshop-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
