<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Workshop $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="workshop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'workshop_type_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_of_workers')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
