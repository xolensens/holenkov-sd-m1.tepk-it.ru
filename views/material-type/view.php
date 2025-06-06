<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\MaterialType $model */

$this->title = $model->id_material_type;
$this->params['breadcrumbs'][] = ['label' => 'Material Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="material-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_material_type' => $model->id_material_type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_material_type' => $model->id_material_type], [
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
            'id_material_type',
            'name_material',
            'float_loss',
        ],
    ]) ?>

</div>
