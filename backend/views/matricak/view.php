<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\query\Matricak $model */

$this->title = $model->matrica_id;
$this->params['breadcrumbs'][] = ['label' => 'Matricák', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="matricak-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Törlés', ['delete', 'matrica_id' => $model->matrica_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bisztos törölni akkarod?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'matrica_id',
            'auto_id',
            'lejarat_idopont',
            'matrica_tipus',
        ],
    ]) ?>

</div>
