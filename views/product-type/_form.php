<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_product_type')->textInput() ?>

    <?= $form->field($model, 'name_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coefficient')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
