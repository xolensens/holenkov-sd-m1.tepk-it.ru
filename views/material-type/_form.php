<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MaterialType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="material-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_material_type')->textInput() ?>

    <?= $form->field($model, 'name_material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'float_loss')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
