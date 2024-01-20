<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\query\Autok $model */

$this->title = 'Create Auto';
$this->params['breadcrumbs'][] = ['label' => 'Autok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
