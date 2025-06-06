<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MaterialType $model */

$this->title = 'Update Material Type: ' . $model->id_material_type;
$this->params['breadcrumbs'][] = ['label' => 'Material Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_material_type, 'url' => ['view', 'id_material_type' => $model->id_material_type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="material-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
