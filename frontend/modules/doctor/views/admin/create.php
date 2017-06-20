<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\doctor\models\TimeBooks */

$this->title = 'Create Time Books';
$this->params['breadcrumbs'][] = ['label' => 'Time Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-books-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
