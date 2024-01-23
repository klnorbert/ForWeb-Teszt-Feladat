<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\query\Matricak $model */

$this->title = 'Update Matricak: ' . $model->matrica_id;
$this->params['breadcrumbs'][] = ['label' => 'Matricaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->matrica_id, 'url' => ['view', 'matrica_id' => $model->matrica_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matricak-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
