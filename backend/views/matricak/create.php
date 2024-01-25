<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\query\Matricak $model */

$this->title = 'Matrica Feltöltés';
$this->params['breadcrumbs'][] = ['label' => 'Matricák', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matricak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
