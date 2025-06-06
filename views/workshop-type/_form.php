<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WorkshopType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="workshop-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_workshop_type')->textInput() ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
