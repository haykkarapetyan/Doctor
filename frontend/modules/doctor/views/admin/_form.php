<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\doctor\models\TimeBooks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-books-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'is_irrelevant')->dropdownList(['1'=> 'Yes', '0'=> 'No']);?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
