<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\query\Autok $model */

$this->title = 'Autó Feltöltés: ' . $model->auto_id;
$this->params['breadcrumbs'][] = ['label' => 'Autók', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->auto_id, 'url' => ['view', 'auto_id' => $model->auto_id]];
$this->params['breadcrumbs'][] = 'Frissítés';
?>
<div class="autok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
