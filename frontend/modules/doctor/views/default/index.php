<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Games */

$this->title = 'Book Time';
?>
<div class="games-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

<?php
$this->registerJsFile(
    'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    'https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerCssFile(
    'https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/build/css/bootstrap-datetimepicker.css',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$script = <<< JS
    $('.datetimepicker').datetimepicker();
JS;
$this->registerJs($script);
?>
