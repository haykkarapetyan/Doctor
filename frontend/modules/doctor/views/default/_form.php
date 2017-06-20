<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="games-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'first_name')->textInput() ?>
    <?= $form->field($model, 'last_name')->textInput() ?>
    <?= $form->field($model, 'phone')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <div style="position: relative;">
    <?= $form->field($model, 'reception_date')->textInput(['class' => 'datetimepicker']) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Book', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
